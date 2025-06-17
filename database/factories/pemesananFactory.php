<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pemesanan>
 */
class pemesananFactory extends Factory
{
     protected $model = \App\Models\Pemesanan::class;

    public function definition()
    {
        return [
            'id_user' => \App\Models\User::factory(), // bikin User dahulu
            'id_pelanggan' => \App\Models\Pelanggan::factory(), // bikin Pelanggan dahulu
            'id_tipe' => \App\Models\Tipe_Kamar::factory(), // bikin Tipe dahulu
            'id_kamar' => \App\Models\Tingkat_Kamar::factory(), // bikin Kamar dahulu
            'tanggal_checkin' => $this->faker->date,
            'tanggal_checkout' => $this->faker->date,
            'jumlah_kamar' => $this->faker->numberBetween(1, 5),
            'total_harga' => $this->faker->numberBetween(50000, 500000),
            'status' => $this->faker->randomElement(['pending', 'paid', 'canceled']),
        ];
    }
}
