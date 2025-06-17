<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    protected $password = 'password';
    public $incrementing = true;  // kalau id_admin auto increment

    // Jika primary key bertipe non-integer, misal string, set juga tipe key-nya
    protected $keyType = 'int';  // default int

    // Timestamps (created_at, updated_at) sudah aktif default, bisa dihapus kalau tidak pakai
    public $timestamps = true;

    // field yg boleh diisi
    protected $fillable = ['id_user', 'nama', 'email', 'no_hp', 'password'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
