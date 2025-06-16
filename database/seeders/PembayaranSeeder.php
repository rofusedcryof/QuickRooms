<?php

namespace Database\Seeders;
use App\Models\Pembayaran;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\Pembayaran::factory(10)->create();

        // Pembayaran::create([
        //     'id_pesanan' => 1,
        //     'metode_pembayaran' => 'Transfer Bank',
        //     'jumlah_pembayaran' => 250000.00,
        //     'status_pembayaran' => 'belum lunas',
        // ]);

        // Pembayaran::create([
        //     'id_pesanan' => 2,
        //     'metode_pembayaran' => 'Kartu Kredit',
        //     'jumlah_pembayaran' => 1000000.00,
        //     'status_pembayaran' => 'lunas',
        // ]);
    }
}
