<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipe_kamar>
 */
class tipe_kamarFactory extends Factory
{
     protected $model = \App\Models\Tipe_Kamar::class;

    public function definition()
    {
        return [
            'jenis' => $this->faker->randomElement(['standard', 'deluxe', 'suite']),
            'deskripsi' => $this->faker->sentence,
            'kapasitas' => $this->faker->numberBetween(1, 10),
            'harga' => $this->faker->numberBetween(50000, 500000),
            'fasilitas' => $this->faker->sentence,
            'foto' => $this->faker->imageUrl(500, 500),
            'id_hotel' => \App\Models\Hotel::factory(), // bikin hotel dahulu
        ];
    }
}
