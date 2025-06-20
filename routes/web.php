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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminHotelController;

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

Route::get('Dasbor/home', [HotelController::class, 'index'])-> name ('home');//jika mengakses URL home maka akan memanggil kelas HotelController dan menjalankan method index
Route::get('/home', [LoginController::class, 'index'])->middleware('auth')->name('home');
Route::get('/home', [HotelController::class, 'index']);


Route::get('bantuan', [BantuanController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::middleware('auth')->get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/home/{hotel:slug}', [HotelController::class, 'show'])->name('hotel.show'); 
 



Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);



Route::post('logout', [LoginController::class, 'destroy'])->name('logout');



Route::middleware('auth')->group(function () {
    Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
    Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
    Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
    Route::get('/pemesanan/{id}', [PemesananController::class, 'show'])->name('pemesanan.show');
    Route::get('/pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('pemesanan.edit');
    Route::get('/pemesanan/{id_pesanan}', [PemesananController::class, 'show'])->name('pemesanan.show');
    Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');
    Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');
});

Route::middleware('auth')->get('/profil', [ProfilController::class, 'index'])->name('profil');


// Route::get('/urusSendiri', function () {
//     return view('Dasbor/urusSendiri', [
//         "title" => "Urus Sendiri",
//         'image1' => 'hehe.jpeg',
//         'name' => 'QuickRoom'

//     ]);
Route::middleware(['auth', 'is.admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    //rute Dasboard Admin
    Route::get('/hotels', [AdminHotelController::class, 'index'])->name('hotels.index');
    Route::get('/hotels/create', [AdminHotelController::class, 'create'])->name('hotels.create');
    Route::post('/hotels', [AdminHotelController::class, 'store'])->name('hotels.store');
    Route::get('/hotels/{id}/edit', [AdminHotelController::class, 'edit'])->name('hotels.edit');
    Route::put('/hotels/{id}', [AdminHotelController::class, 'update'])->name('hotels.update');
    Route::delete('/hotels/{id}', [AdminHotelController::class, 'destroy'])->name('hotels.destroy');
});




// Route::get('/hotel', function () {
//     return view('hotel', [
//         "title" => "Hotels",
//         "posts" => hotel::all()
//     ]);
// });
