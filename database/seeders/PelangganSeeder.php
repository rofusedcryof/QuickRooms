<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $user = User::where('email', 'pelanggan@email.com')->first();

        // Pelanggan::create([
        //     'id_user' => $user->id_user,
        //     'id_hotel' => 1,
        // ]);

        //\App\Models\Pelanggan::factory(10)->create();

        // Pelanggan::create([
        //     'nama' => 'el',
        //     'email' => 'el@gmail.com',
        //     'alamat' => 'Jl.Kehampaan, Gg.Kebencian',
        //     'telepon' => '082542342311'
        // ]);

        // Pelanggan::create([
        //     'nama' => 'udin',
        //     'email' => 'udhi@gmail.com',
        //     'alamat' => 'Jl.Kehampaan, Gg.Kebencian',
        //     'telepon' => '082542342318'
        // ]);
    }
}
