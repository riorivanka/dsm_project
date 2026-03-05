<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm() {
        if (session()->has('nik') && session('stt_login') === 'ok') {
            $role = session('role_akses');
            return ($role === 'admin') ? redirect()->route('home') : redirect()->route('overview_user');
        }
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'nik' => 'required|numeric',
            'password' => 'required|numeric',
        ], [
            'nik.required' => 'NIK wajib diisi.',
            'nik.numeric' => 'NIK harus berupa angka.',
            'password.required' => 'PIN wajib diisi.',
            'password.numeric' => 'PIN harus berupa angka.',
        ]);

        try {
            $user = DB::connection('oracle_dw')->select("select app_user_security.get_valid_user('" . $request->nik . "','" . $request->password . "') as LOG_OK from dual");
            $logOk = strtoupper($user[0]->log_ok ?? 'F');

            if ($logOk === 'T') {
                $nik = $request->nik;
                $dataUser = User::where('NIK', $nik)->first();

                if (!$dataUser) {
                    $request->session()->flush();
                    $request->session()->invalidate();
                    return back()->withErrors(['login_gagal' => 'Data NIK tidak terdaftar di sistem lokal.']);
                }

                $userArr = array_change_key_case($dataUser->toArray(), CASE_UPPER);
                $rawNamaUP = $userArr['NAMA_UP'] ?? '';
                $namaUP = trim(str_replace('  ', ' ', strtoupper($rawNamaUP)));

                if ($namaUP === 'ANDI ISKANDAR NAY') {
                    $role = 'admin';
                } elseif ($namaUP === 'MOCHAMAD ZULQA') {
                    $role = 'user';
                } else {
                    $pesanError = "Akses Ditolak. Nama UP Anda [ " . $namaUP . " ] tidak memiliki otoritas.";
                    return redirect()->back()->withErrors(['login_gagal' => $pesanError]);
                }

                $request->session()->put('nama', $userArr['NAMA'] ?? '');
                $request->session()->put('nik', $userArr['NIK'] ?? $nik);
                $request->session()->put('role_akses', $role); 
                $request->session()->put('stt_login', 'ok');
                
                return ($role === 'admin') ? redirect()->route('home') : redirect()->route('overview_user');

            } elseif ($logOk === 'F') {
                return redirect()->back()->with('error', 'NIK Atau PIN Salah');
            } elseif ($logOk === 'E') {
                return redirect()->back()->with('error', 'Nik anda sudah expired');
            } else {
                return redirect()->back()->with('error', 'Terjadi Kesalahan.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Kesalahan Sistem: ' . $e->getMessage());
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}