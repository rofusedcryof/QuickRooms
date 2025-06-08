<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tingkat_kamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tingkat_kamar';
    public $timestamps = true;
    protected $fillable = [
        'nama_tingkat',
        'deskripsi',
    ];
    //relasi dgn class pemesanan
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_tingkat_kamar');
    }
}
