<?php

namespace Database\Seeders;
use App\Models\tipe_kamar;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipe_kamar::create([
            'jenis' => 'Single',
            'deskripsi' => 'Kamar untuk 1 orang, fasilitas standar',
            'kapasitas' => 1,
        ]);

        tipe_kamar::create([
            'jenis' => 'Double',
            'deskripsi' => 'Kamar untuk 2 orang dengan 2 tempat tidur',
            'kapasitas' => 2,
        ]);

        tipe_kamar::create([
            'jenis' => 'Suite',
            'deskripsi' => 'Kamar mewah dengan ruang tamu terpisah',
            'kapasitas' => 3,
        ]);
    }
}
