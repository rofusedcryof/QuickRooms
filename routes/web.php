<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Models\hotel;

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
    return view('home', [
        "title" => "Home",
        "image" => "logo2.png",
        "name" => "QuickRoom"
    ]);
});

Route::get('registrasi', function () {
    return 'halaman registrasi';
});

Route::get('login', function () {
    return 'halaman login';
});

Route::get('bantuan', function () {
    return view('PusatBantuan', [
        'title' => "Bantuan",
        'image' => 'logo.png',
        'name' => 'QuickRoom'
    ]);
});
Route::get('urusSendiri', function () {
    return view('urusSendiri', [
        "title" => "Urus Sendiri",
        "image" => "logo.png",
        'image1' => 'hehe.jpeg',
        'name' => 'QuickRoom'

    ]);
});


Route::get('about', function () {
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
});

Route::get('profil', function () {
    return view('profil', [
        "title" => "Profil",
        "name" => "QuickRoom",
        "image" => "logo.png",
        "nama" => "Mikael",
        'email' => 'mikael@gmail.com'

    ]);
});
Route::get('/hotel', function(){
    return view('hotel', [
        "title" => "Hotels",
        "posts" => hotel::all()
    ]);
});
