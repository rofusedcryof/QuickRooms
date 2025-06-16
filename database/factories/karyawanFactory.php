<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\karyawan>
 */
class karyawanFactory extends Factory
{
    protected $model = \App\Models\Karyawan::class;

    public function definition()
    {
       return [
        'id_user' => \App\Models\User::inRandomOrder()->first()->id_user,
        'nama' => $this->faker->name,
        'email' => $this->faker->unique()->email,
        'jabatan' => $this->faker->randomElement(['kasir', 'staff', 'manajer']),
        'no_hp' => $this->faker->phoneNumber,
        'alamat' => $this->faker->address,
        'id_hotel' => \App\Models\Hotel::inRandomOrder()->first()->id_hotel,
    ];
    }
}
