<?php

namespace Database\Factories;

use App\Models\TipeKamar;
use App\Models\TingkatKamar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipe_kamar>
 */
class TipeKamarFactory extends Factory
{
     protected $model = \App\Models\TipeKamar::class;

    public function definition()
    {
        return [
            'jenis' => $this->faker->randomElement(['single', 'double', 'twin', 'suite', 'family']),
            'deskripsi' => $this->faker->sentence,
            'kapasitas' => $this->faker->numberBetween(1, 10),
            'harga' => $this->faker->numberBetween(50000, 500000),
            'fasilitas' => $this->faker->sentence,
            'foto' => $this->faker->imageUrl(500, 500),
            'id_hotel' => \App\Models\Hotel::factory(), // bikin hotel dahulu
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (TipeKamar $tipeKamar) {
            TingkatKamar::factory(2)->create([
                'id_tipe' => $tipeKamar->id_tipe,
                'id_hotel' => $tipeKamar->id_hotel,
            ]);
        });
    }
}
