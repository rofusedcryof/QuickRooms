<?php

use App\Models\hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BantuanController;

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

Route::get('home', [HotelController::class, 'index']);//jika mengakses URL home maka akan memanggil kelas HotelController dan menjalankan method index

Route::get('bantuan', [BantuanController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::get('profil', [ProfilController::class, 'index']);

Route::get('/home/{hotel:slug}', [HotelController::class, 'show']); 
 



Route::get('registrasi', function () {
    return 'halaman registrasi';
});

Route::get('login', function () {
    return 'halaman login';
});



Route::get('urusSendiri', function () {
    return view('urusSendiri', [
        "title" => "Urus Sendiri",
        'image1' => 'hehe.jpeg',
        'name' => 'QuickRoom'

    ]);
});





// Route::get('/hotel', function () {
//     return view('hotel', [
//         "title" => "Hotels",
//         "posts" => hotel::all()
//     ]);
// });
