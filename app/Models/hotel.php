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

    public function scopeFilter($query , array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_hotel', 'like', '%' . $search . '%')
                ->orWhere('alamat_hotel', 'like', '%' . $search . '%');
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class, 'id_hotel');
    }

    public function tipeKamar()
    {
        return $this->hasMany(TipeKamar::class, 'id_hotel');
    }

    public function karyawan()
    {
        return $this->hasMany(karyawan::class, 'id_hotel');
    }
}
