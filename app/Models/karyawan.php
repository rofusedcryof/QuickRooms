<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_karyawan';
    public $timestamps = true;
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'jabatan',
    ];
}
