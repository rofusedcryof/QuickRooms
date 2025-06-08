<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'email' => 'string',
        'no_hp' => 'string',
    ];

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_pelanggan');
    }
}