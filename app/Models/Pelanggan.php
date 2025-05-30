<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    // Define the table associated with the model
    protected $table = 'pelanggan';

    // Specify the primary key of the table
    protected $primaryKey = 'id';

    // Enable or disable timestamps
    public $timestamps = true;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
    ];

    // Define hidden attributes for serialization
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Define casts for attributes
    protected $casts = [
        'email' => 'string',
        'telepon' => 'string',
    ];

    // Example method to check if the pelanggan is VIP
    public function isVIP()
    {
        return $this->role === 'VIP';
    }

    // Define relationship with Pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}