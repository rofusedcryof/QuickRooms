<?php

namespace Database\Seeders;
use App\Models\tingkat_kamar;
use App\Models\tipe_kamar;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        hotel::factory(10)->create();

        tipe_kamar::create([
            'jenis' => 'single',
            'deskripsi' => 'asdvafsvervarcadc',
            'kapasitas' => 4,
            'harga' => 120000,
            'fasilitas' => 'Gym',
            'foto' => 'hehe.jpeg',
            'id_hotel' => 4
        ]);

        tingkat_kamar::create([
            'nomor_kamar' => 107,
            'lantai' => 1,
            'status' => 'VIP',
            'id_tipe' => 1,
            'id_hotel' => 6
        ]);
    }
}
