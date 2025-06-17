<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelanggan>
 */
class pelangganFactory extends Factory
{
    protected $model = \App\Models\Pelanggan::class;

    public function definition()
    {
        return [
            'id_user' => \App\Models\User::factory(), // bikin User dahulu
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'no_hp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
        ];
    }
}
