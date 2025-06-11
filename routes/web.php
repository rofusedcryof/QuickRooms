<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('registrasi', function () {
    return 'halaman registrasi';
});

Route::get('login', function () {
    return 'halaman login';
});

Route::get('about', function () {
    return view('about', [
        "title" => "About",
        "tagline" => "Solusi Mudah & Cepat Untuk Reservasi Hotel Anda",
        "desSing" => "adalah platform reservasi hotel berbasis web yang dirancang untuk memudahkan pengguna dalam mencari dan memesan kamar hotel secara cepat, aman, dan efisien.",
        "li1" => "Reservasi kamar real-time dengan konfirmasi instan",
        "li2" => "Filter hotel berdasarkan harga, lokasi, dan fasilitas",
        "li3" => "Sistem login untuk pelanggan, admin, dan karyawan",
        "li4" => "Manajemen data kamar, tingkat, dan pembayaran",
        "li5" => "Dashboard statistik pemesanan & laporan",
        "misiKami" => "Mendorong digitalisasi layanan perhotelan lokal agar lebih kompetitif dan terjangkau. QuickRoom percaya bahwa setiap orang berhak atas pengalaman reservasi hotel yang nyaman dan profesional."

    ]);
});

