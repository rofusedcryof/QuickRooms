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
            'Hotel Alila',
            'Hotel Santika',
            'Hotel Ibis Style',
            'Hotel Novotel',
            'Hotel RedDoorz',
            'Hotel Zest',
            'Hotel Swiss-Belinn',
            'Hotel Fave',
            'Hotel Pullman',
            'Hotel Fairmont',
            'Hotel Raffles',
            'Hotel Mandarin',
            'Hotel Park Regis',
            'Hotel Citadines',
            'Hotel Yello',
            'Hotel Pop!',
            'Hotel Batiqa',
            'Hotel MaxOne',
            'Hotel Ayana',
            'Hotel Tentrem',
            'Hotel Grand Tjokro',
            'Hotel Neo',
            'Hotel The Alana',
            'Hotel Gaia',
            'Hotel Royal Ambarrukmo',
            'Hotel Luminor',
            'Hotel The Phoenix',
            'Hotel Swissôtel',
            'Hotel Atria',
            'Hotel Whiz Prime',
            'Hotel Golden Tulip',
            'Hotel Best Western',
            'Hotel Arcadia',
            'Hotel Harper',
            'Hotel Sahid',
            'Hotel Mega Anggrek',
            'Hotel Ciputra',
            'Hotel De Paviljoen',
            'Hotel Aston Pasteur',
            'Hotel Royal Kuningan',
            'Hotel Jayakarta',
            'Hotel Swiss-Belresort',
            'Hotel Melia',
            'Hotel The Trans',
            'Hotel InterContinental',
            'Hotel JW Marriott',
            'Hotel The Ritz-Carlton',
            'Hotel The Westin',
            'Hotel Marriott Courtyard',
            'Hotel Wyndham',
            'Hotel Grand Hyatt',
            'Hotel Hyatt Regency',
            'Hotel Le Méridien',
            'Hotel Four Points',
            'Hotel DoubleTree',
            'Hotel Grand Inna',
            'Hotel Inna Sindhu',
            'Hotel Grand Zuri',
            'Hotel Emersia',
            'Hotel Grand Taman',
            'Hotel Cordela',
            'Hotel Royal Padjadjaran',
            'Hotel Horaios Malioboro',
            'Hotel Pesonna',
            'Hotel Nirwana',
            'Hotel Oasis Amir',
            'Hotel Dafam',
            'Hotel Grand Cempaka',
            'Hotel Bigland',
            'Hotel Grand Asia',
            'Hotel Arya Duta',
            'Hotel The Grove Suites',
            'Hotel Artotel',
            'Hotel Nite & Day',
            'Hotel The 1O1',
            'Hotel Greenhost',
            'Hotel Swiss-Kitchen',
            'Hotel Summerhill',
            'Hotel The Griya',
            'Hotel The Sunan',
            'Hotel Gammara',
            'Hotel Aston Priority',
            'Hotel THE 101 Bogor',
            'Hotel The Bellezza',
            'Hotel Ibis Budget',
            'Hotel De Braga',
            'Hotel The Luxton',
            'Hotel Harris Vertu',
            'Hotel Holiday Inn',
            'Hotel Alana Malioboro',
            'Hotel Oakwood Suites',
            'Hotel Gaia Cosmo',
            'Hotel Jambuluwuk',
            'Hotel Java Paragon',
            'Hotel Mercure Grand'
        ];


        // $gambar_hotel =[
        //     'hotel1.jpeg',
        //     'hotel2.jpeg'
        // ];

        return [
            'slug' => $this->faker->unique()->slug,
            'gambar' => $this->faker->randomElement(['hotel1.jpeg', 'hotel2.jpeg', 'hotel3.jpg', 'hotel4.jpeg', 'hotel5.jpg', 'hotel6.webp', 'hotel7.jpeg', 'hotel8.jpeg', 'hotel9.jpg', 'hotel10.jpg']),
            'nama_hotel' => $this->faker->unique()->randomElement($namaHotels),
            'alamat_hotel' => $this->faker->address,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'harga' => $this->faker->numberBetween(100000, 500000),
        ];
    }
}
