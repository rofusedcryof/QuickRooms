<?php

namespace App\Models;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    protected $primaryKey = 'id_hotel';

    protected $fillable = ['slug', 'gambar', 'nama_hotel', 'alamat_hotel', 'excerpt', 'body', 'harga'];

    public function getRouteKeyName()
    {
        return 'id_hotel';
    }

    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class, 'id_hotel');
    }

    public function tipe_kamar()
    {
        return $this->hasMany(tipe_kamar::class, 'id_hotel');
    }

    public function karyawan()
    {
        return $this->hasMany(karyawan::class, 'id_hotel');
    }
}
