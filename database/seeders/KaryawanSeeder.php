<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $user = User::where('email', 'karyawan@email.com')->first();

        // Karyawan::create([
        //     'id_user' => $user->id_user,
        //     'jabatan' => 'staff',
        //     'id_hotel' => 1,
        // ]);

        // \App\Models\karyawan::factory(10)->create();

        // Karyawan::create([
        //     'nama' => 'yin',
        //     'email' => 'yin@gmail.com',
        //     'jabatan' => 'kasir',
        // ]);

        // Karyawan::create([
        //     'nama' => 'yil',
        //     'email' => 'til@gmail.com',
        //     'jabatan' => 'staff',
        // ]);
    }
}
