<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User pelanggan
        User::create([
            'name' => 'asep',
            'email' => 'asep@gmail.com',
            'password' => Hash::make('365289'), // hash password
            'role' => 'pelanggan',
            'no_telp' => '08123456789',
            'alamat' => 'Jl.kenangan',
            'jabatan' => null,
        ]);

        // User admin
        User::create([
            'name' => 'admin',
            'email' => 'udin@gmail.com',
            'password' => Hash::make('adminpass'),
            'role' => 'admin',
            'no_telp' => null,
            'alamat' => null,
            'jabatan' => null,
        ]);

        // User karyawan
        User::create([
            'name' => 'karyawan1',
            'email' => 'anto@gmail.com',
            'password' => Hash::make('karyawanpass'),
            'role' => 'karyawan',
            'no_telp' => '08987654321',
            'alamat' => null,
            'jabatan' => 'kasir',
        ]);
    }
}
