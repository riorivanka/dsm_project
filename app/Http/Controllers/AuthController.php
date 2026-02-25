<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm() {
        if (Auth::check()) {
            return redirect()->route('home');
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

        // Login Group 
        $user = DB::connection('oracle_dw')->select("select app_user_security.get_valid_user('" . $request->nik . "','" . $request->password . "') as LOG_OK from dual");

        $logOk = $user[0]->log_ok;
        if ($logOk == 'T') {
            $nik = $request->nik;
            // $nik = '0396111690';
            $dataUser = User::where('NIK', $nik)->first();

            if ($dataUser->STATUS_AKTIF != '1') {
                Auth::logout();
                $request->session()->invalidate();
                return back()->withErrors(['login_gagal' => 'Akun Anda dinonaktifkan.']);
            }

            $request->session()->put('nama', $dataUser->NAMA);
            $request->session()->put('nik', $dataUser->NIK);
            $request->session()->put('role_akses', $dataUser->role_akses);
            $request->session()->put('stt_login', 'ok');
            return redirect()->route('home');
        } elseif ($logOk === 'F') {
            return redirect()->back()->with('error', 'NIK Atau PIN Salah');
        } elseif ($logOk === 'E') {
            return redirect()->back()->with('error', 'Nik anda sudah expired');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan.');
        }


        // // cek login db
        // $credentials = [
        //     'NIK' => $request->nik,
        //     'password' => $request->password
        // ];

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     $user = Auth::user();

        //     if ($user->STATUS_AKTIF != '1') { 
        //         Auth::logout();
        //         $request->session()->invalidate();
        //         // error akun nonaktif/bukan karyawan aktif
        //         return back()->withErrors(['login_gagal' => 'Akun Anda dinonaktifkan.']);
        //     }

        //     return redirect()->route('home');
        // }

        // // jika salah password / nik ga ketemu, kirim error 
        // return back()
        //     ->withInput($request->only('nik'))
        //     ->withErrors(['login_gagal' => 'NIK atau Password Salah!']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}