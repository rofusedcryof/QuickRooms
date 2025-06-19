<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tipe';
    public $timestamps = true;
    protected $fillable = ['jenis', 'deskripsi', 'kapasitas', 'harga', 'fasilitas', 'foto', 'id_hotel'];

    //relasi dgn class pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_tipe_kamar');
    }

        public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
  
    public function tingkat_kamar()
    {
        return $this->hasMany(TingkatKamar::class, 'id_tipe');
    }
}
