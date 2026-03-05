<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // 1. Ubah koneksi ke oracle
    protected $connection = 'oracle';

    // 2. Sesuaikan nama tabel (Gunakan huruf kapital sesuai standar Oracle)
    protected $table = 'PUR_PERSONNEL';

    // 3. Primary Key tetap NIK
    protected $primaryKey = 'NIK';
    public $incrementing = false;
    protected $keyType = 'string';

    // 4. Pastikan kolom fillable sesuai dengan struktur tabel PUR_PERSONNEL
    protected $fillable = [
        'NIK', 
        'NAMA', 
        'email', 
        'password', 
        'JABATAN',      
        'DEPARTEMEN',   
        'STATUS_AKTIF', 
        'role_akses', 
        'NAMA_UP', // Tambahkan ini karena kita pakai untuk cek role di Controller
        'supervisor_nik', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relasi tetap sama, pastikan NIK dan supervisor_nik ada di tabel PUR_PERSONNEL
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_nik', 'NIK');
    }

    public function subordinates()
    {
        return $this->hasMany(User::class, 'supervisor_nik', 'NIK');
    }
}