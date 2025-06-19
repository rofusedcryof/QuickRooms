<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'users';


    protected $primaryKey = 'id_user';


    public $timestamps = true;


    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'no_hp',
        'alamat',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isKaryawan()
    {
        return $this->role === 'karyawan';
    }

    public function isPelanggan()
    {
        return $this->role === 'pelanggan';
    }


    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_user');
    }

    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class, 'id_user');
    }

    public function karyawan()
    {
        return $this->hasOne(karyawan::class, 'id_user');
    }

    public function Admin()
    {
        return $this->hasOne(Admin::class, 'id_user');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
}