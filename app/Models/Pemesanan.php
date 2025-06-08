<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'id_user',
        'id_pelanggan',
        'id_tipe_kamar',
        'id_tingkat_kamar',
        'tanggal_checkin',
        'tanggal_checkout',
        'jumlah_kamar',
        'total_harga',
        'status_pemesanan',
    ];

    //relasi dgn class pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
    //relasi dgn class user
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    //relasi dgn class tipe kamar
    public function tipe_kamar()
    {
        return $this->belongsTo(tipe_kamar::class, 'id_tipe_kamar');
    }
    //relasi dgn class tingkat kamar
    public function tingkat_kamar()
    {
        return $this->belongsTo(tingkat_kamar::class, 'id_tingkat_kamar');
    }
    //relasi dgn class pembayaran
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pemesanan');
    }
}
