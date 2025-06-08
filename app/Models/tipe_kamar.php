<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipe_kamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tipe_kamar';
    protected $fillable = [
        'nama_tipe',
        'deskripsi',
        'harga',
        'kapasitas',
        'fasilitas',
        'foto',
    ];

    //relasi dgn class pemesanan
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_tipe_kamar');
    }
}
