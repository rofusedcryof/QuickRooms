<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hotel>
 */
class hotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\hotel::class;

    public function definition(): array
    {
        $namaHotels = [
            'Hotel Pams',
            'Hotel Ming',
            'Hotel Yin',
            'Hotel Aston',
            'Hotel Amaris',
            'Hotel Horison',
            'Hotel Harris',
            'Hotel Grand Mercure',
            'Hotel Aryaduta',
            'Hotel Alila'
        ];

        return [
            'slug' => $this->faker->unique()->slug,
            'gambar' => $this->faker->imageUrl(640, 480, 'hotel'),
            'nama_hotel' => $this->faker->unique()->randomElement($namaHotels),
            'alamat_hotel' => $this->faker->address,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'harga' => $this->faker->numberBetween(100000, 500000),
        ];
    }
}
