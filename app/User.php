<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $connection = 'pgsql';
    protected $primaryKey = 'NIK';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NIK', 
        'NAMA', 
        'email', 
        'password', 
        'JABATAN',      
        'DEPARTEMEN',   
        'STATUS_AKTIF', 
        'role_akses', 
        'supervisor_nik', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_nik', 'NIK');
    }

    public function subordinates()
    {
        return $this->hasMany(User::class, 'supervisor_nik', 'NIK');
    }
}