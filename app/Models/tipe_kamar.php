<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipe_kamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tipe';
    public $timestamps = true;
    protected $fillable = ['jenis', 'deskripsi', 'kapasitas', 'harga', 'fasilitas', 'foto', 'id_hotel'];

    //relasi dgn class pemesanan
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_tipe_kamar');
    }

        public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
  
    public function tingkat_kamars()
    {
        return $this->hasMany(tingkat_kamar::class, 'id_tipe');
    }
}
