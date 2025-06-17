<?php

namespace Database\Seeders;
use App\Models\Pemesanan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\Pemesanan::factory(10)->create();

        // Pemesanan::create([
        //     'id_pelanggan' => 1,
        //     'id_kamar' => 1,
        //     'tanggal_checkin' => '2025-06-15',
        //     'tanggal_checkout' => '2025-06-17',
        //     'status' => 'booking',
        //     'total_harga' => 500000.00,
        // ]);

        // Pemesanan::create([
        //     'id_pelanggan' => 2,
        //     'id_kamar' => 2,
        //     'tanggal_checkin' => '2025-06-18',
        //     'tanggal_checkout' => '2025-06-20',
        //     'status' => 'lunas',
        //     'total_harga' => 1000000.00,
        // ]);
    }
}
