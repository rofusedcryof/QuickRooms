<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama' => 'Mikael',
            'email' => 'mikael@gmail.com',
        ]);

        Admin::create([
            'nama' => 'Mike',
            'email' => 'mike@gmail.com',
        ]);

        Admin::create([
            'nama' => 'mik',
            'email' => 'mik@gmail.com',
        ]);
    }
}
