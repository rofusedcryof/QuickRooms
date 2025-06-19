<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans'; // Nama tabel di database
    protected $primaryKey = 'id_pesanan';
    protected $fillable = [
        'nama',
        'email',
        'check_in',
        'check_out',
        'id_tipe_kamar',
        'jumlah_kamar',
        'catatan',
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
        return $this->belongsTo(TipeKamar::class, 'id_tipe_kamar');
    }
    //relasi dgn class tingkat kamar
    public function tingkat_kamar()
    {
        return $this->belongsTo(TingkatKamar::class, 'id_tingkat_kamar');
    }
    //relasi dgn class pembayaran
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pemesanan');
    }
    //relasi dgn class hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
}
