<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
        "title" => "Tentang QuickRoom",
        "image" => "logo.png",
        "name" => "QuickRoom",
        "tagline" => "Solusi Mudah & Cepat Untuk Reservasi Hotel Anda",
        "desSing" => "adalah platform reservasi hotel berbasis web yang dirancang untuk memudahkan pengguna dalam mencari dan memesan kamar hotel secara cepat, aman, dan efisien.",
        "li1" => "Reservasi kamar real-time dengan konfirmasi instan",
        "li2" => "Filter hotel berdasarkan harga, lokasi, dan fasilitas",
        "li3" => "Sistem login untuk pelanggan, admin, dan karyawan",
        "li4" => "Manajemen data kamar, tingkat, dan pembayaran",
        "li5" => "Dashboard statistik pemesanan & laporan",
        "misiKami" => "Mendorong digitalisasi layanan perhotelan lokal agar lebih kompetitif dan terjangkau. QuickRoom percaya bahwa setiap orang berhak atas pengalaman reservasi hotel yang nyaman dan profesional."

    ]);
    }
}
