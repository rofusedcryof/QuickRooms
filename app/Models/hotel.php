<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hotel
{
    private static $blog_posts = [
        [
            "image" => "hotel1.jpeg",
            "title" => "Selengkapnya 1",
            "slug" => "selengkapnya-1",
            "nama" => "Ming-hotel",
            "alamat" => "jln. cinta damai",
            "deskripsi_hotel" => "Terletak di lokasi strategis di tengah kota, hotel ini menawarkan pengalaman menginap yang nyaman dan elegan bagi para tamu yang mencari kemewahan dan kenyamanan dalam satu tempat. Dengan desain interior modern yang dipadukan dengan sentuhan lokal yang hangat, setiap kamar dirancang untuk memberikan suasana rileks dan tenang setelah hari yang padat. Hotel ini menyediakan berbagai fasilitas lengkap, termasuk restoran dengan pilihan menu lokal dan internasional, ruang pertemuan untuk kebutuhan bisnis, serta layanan resepsionis 24 jam yang siap membantu kebutuhan Anda kapan saja. Cocok untuk wisatawan, keluarga, hingga pelancong bisnis, hotel ini menjadi pilihan ideal untuk setiap perjalanan Anda.",

            "keunggulan_hotel" => "Kolam renang outdoor, Wi-Fi gratis di seluruh area, dekat pusat perbelanjaan, dan layanan kamar 24 jam."


        ],
        [
            "image" => "hotel2.jpeg",
            "title" => "Selengkapnya 2",
            "slug" => "selengkapnya-2",
            "nama" => "Pams-hotel",
            "alamat" => "jln. cinta dia",
            "deskripsi_hotel" => "Hotel ini menghadirkan suasana menginap yang tenang dan menyegarkan dengan pemandangan indah dan lingkungan yang asri. Dirancang dengan arsitektur kontemporer yang elegan, setiap sudut hotel mencerminkan kenyamanan dan kehangatan layaknya rumah sendiri. Kamar-kamar yang luas dilengkapi dengan fasilitas modern seperti televisi layar datar, AC, kamar mandi pribadi dengan air panas, serta area duduk untuk bersantai. Lokasi hotel yang dekat dengan tempat wisata populer, pusat perbelanjaan, dan transportasi umum membuatnya sangat ideal bagi wisatawan domestik maupun mancanegara. Baik untuk perjalanan liburan bersama keluarga, pasangan, maupun keperluan bisnis, hotel ini siap memberikan pengalaman menginap yang menyenangkan dan tak terlupakan.",
            "keunggulan_hotel" => "Kolam renang outdoor, Wi-Fi gratis di seluruh area, dekat pusat perbelanjaan, dan layanan kamar 24 jam."

        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $hotels = static::all();// mengambil semua data dari method all
        return $hotels->firstWhere('slug', $slug);//ambil data pertama dimana slug sama dengan $slug
    }
}
