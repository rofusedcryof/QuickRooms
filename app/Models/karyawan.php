<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $primaryKey = 'id_karyawan';
    protected $keyType = 'int';
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'jabatan',
    ];
    public $incrementing = true;
    public $timestamps = true;
}
