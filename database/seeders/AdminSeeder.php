<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $user = User::where('email', 'admin@email.com')->first();

        // Admin::create([
        //     'id_user' => $user->id_user,
        // ]);

        // \App\Models\Admin::factory(10)->create();

        // Admin::create([
        //     'nama' => 'Mikael',
        //     'email' => 'mikael@gmail.com',
        //     'password' => '365289'
        // ]);

        // Admin::create([
        //     'nama' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => 'admin_p4ss'
        // ]);

        // Admin::create([
        //     'nama' => 'mik',
        //     'email' => 'mik@gmail.com',
        //     'password'=> 'pecinta_keju'
        // ]);


        // Admin::create([
        //     'id_user' => '1',
        //     'nama' => 'mikael',
        //     'email' => 'mikael@gmail.com',
        //     'no_hp' => '0857676267890',
        //     'password' => '365289'
        // ]);

    }
}
