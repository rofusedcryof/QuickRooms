<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\karyawan;
use App\Models\Pelanggan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // User Admin
        $adminUser = User::factory()->create([
            'role' => 'admin',
            'nama' => 'mikael',
            'email' => 'mikael@gmail.com',
            'no_hp' => '4262462452454',
            'password' => bcrypt('365289'),
        ]);

        // User Karyawan
        $karyawanUser = User::factory()->create([
            'role' => 'karyawan',
            'nama' => 'mika',
            'email' => 'mika@gmail.com',
            'no_hp' => '805787766713',
            'alamat' => 'jln. keren',
            'password' => bcrypt('096852'),
            'jabatan' => 'staff',
            'id_hotel' => 2
        ]);

        // User Pelanggan
        $pelangganUser = User::factory()->create([
            'role' => 'pelanggan',
            'nama' => 'mik',
            'email' => 'mik@gmail.com',
            'no_hp' => '805787766713',
            'alamat' => 'jln. kegelapan platform',
            'password' => bcrypt('764128'),
            'id_hotel' => 2
        ]);

        // Setelah User tersedia, bikin sesuai
        Admin::create([
            'id_user' => $adminUser->id_user,
            'nama'    => $adminUser->nama,
            'no_hp' => $adminUser->no_hp,
            'email' => $adminUser->email,
            'password' => $adminUser->password,
        ]);

        Karyawan::create([
            'id_user' => $karyawanUser->id_user,
            'nama' => $karyawanUser->nama,
            'email' => $karyawanUser->email,
            'no_hp' => $karyawanUser->no_hp,
            'alamat' => $karyawanUser->alamat,
            'password' => $karyawanUser->password,
            'jabatan' => $karyawanUser->jabatan,
            'id_hotel' => $karyawanUser->id_hotel
        ]);

        Pelanggan::create([
            'id_user' => $pelangganUser->id_user,
            'nama' => $pelangganUser->nama,
            'email' => $pelangganUser->email,
            'no_hp' => $pelangganUser->no_hp,
            'alamat' => $pelangganUser->alamat,
            'password' => $pelangganUser->password,
            'id_hotel' => $pelangganUser->id_hotel
        ]);
        //\App\Models\User::factory(10)->create();

        // // User pelanggan
        // User::create([
        //     'name' => 'asep',
        //     'email' => 'asep@gmail.com',
        //     'password' => Hash::make('365289'), // hash password
        //     'role' => 'pelanggan',
        //     'no_telp' => '08123456789',
        //     'alamat' => 'Jl.kenangan',
        //     'jabatan' => null,
        // ]);

        // // User admin
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'udin@gmail.com',
        //     'password' => Hash::make('adminpass'),
        //     'role' => 'admin',
        //     'no_telp' => null,
        //     'alamat' => null,
        //     'jabatan' => null,
        // ]);

        // // User karyawan
        // User::create([
        //     'name' => 'karyawan1',
        //     'email' => 'anto@gmail.com',
        //     'password' => Hash::make('karyawanpass'),
        //     'role' => 'karyawan',
        //     'no_telp' => '08987654321',
        //     'alamat' => null,
        //     'jabatan' => 'kasir',
        // ]);
    }
}
