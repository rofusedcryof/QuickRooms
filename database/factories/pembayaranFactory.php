<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pembayaran>
 */
class pembayaranFactory extends Factory
{
    protected $model = \App\Models\Pembayaran::class;

    public function definition()
    {
        return [
            'id_pemesanan' => \App\Models\Pemesanan::factory(), // bikin Pemesanan dahulu
            'metode_pembayaran' => $this->faker->randomElement(['transfer', 'tunai']),
            'jumlah' => $this->faker->numberBetween(50000, 500000),
            'status_pembayaran' => $this->faker->randomElement(['pending', 'paid']),
            'tanggal_pembayaran' => $this->faker->date,
            'bukti_pembayaran' => $this->faker->imageUrl(500, 500),
        ];
    }
}
