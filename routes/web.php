<?php

use App\Models\hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;

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
 



Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');


Route::get('/pemesanan', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');


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
