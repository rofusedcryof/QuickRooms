<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Karyawan;

class DatabaseSeeder extends Seeder

{
    public function run(): void
    {

        $this->call([
            HotelSeeder::class, 
            // PelangganSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            // KaryawanSeeder::class, 
            // TipeKamarSeeder::class,
            // TingkatKamarSeeder::class,
            // PemesananSeeder::class,
            // PembayaranSeeder::class,
        ]);




        // Admin::factory()->count(10)->create();
        // Karyawan::factory()->count(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
