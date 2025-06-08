<?php

namespace Database\Seeders;
use App\Models\tingkat_kamar;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TingkatKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tingkat_kamar::create([
            'nomor_kamar' => '101',
            'lantai' => 1,
            'status' => 'reguler',
            'id_tipe' => 1, // Single
        ]);

        tingkat_kamar::create([
            'nomor_kamar' => '102',
            'lantai' => 1,
            'status' => 'vip',
            'id_tipe' => 2, // Double
        ]);

        tingkat_kamar::create([
            'nomor_kamar' => '201',
            'lantai' => 2,
            'status' => 'vvip',
            'id_tipe' => 3, // Suite
        ]);
    }
}
