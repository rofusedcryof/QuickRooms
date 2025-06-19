<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tingkat_kamar>
 */
class TingkatKamarFactory extends Factory
{
    protected $model = \App\Models\TingkatKamar::class;

    public function definition()
    {
        return [
            'nomor_kamar' => $this->faker->unique()->numberBetween(100, 500),
            'lantai' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['reguler', 'vip', 'vvip', 'kelas 1', 'kelas 2', 'kelas 3']),
            'id_tipe' => \App\Models\TipeKamar::factory(), // bikin Tipe dahulu
        ];
    }
}
