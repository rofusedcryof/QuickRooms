<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatKamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kamar';
    public $timestamps = true;
    protected $fillable = [
        'nomor_kamar',
        'lantai',
        'status',
        'id_tipe',
        'id_hotel'
    ];
    //relasi dgn class pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_tingkat_kamar');
    }

    public function TipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'id_tipe');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
}
