<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// AUTH
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// USER
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

// PELANGGAN
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::post('/pelanggan', [PelangganController::class, 'store']);

// PEMESANAN
// Route::get('/pemesanan', [PemesananController::class, 'index']);
// Route::post('/pemesanan', [PemesananController::class, 'store']);

// KAMAR
Route::get('/kamar', [KamarController::class, 'index']);
Route::post('/kamar', [KamarController::class, 'store']);

// TIPE KAMAR
// Route::get('/tipe-kamar', [TipeKamarController::class, 'index']);
// Route::post('/tipe-kamar', [TipeKamarController::class, 'store']);

// PEMBAYARAN
// Route::get('/pembayaran', [PembayaranController::class, 'index']);
// Route::post('/pembayaran', [PembayaranController::class, 'store']);

// ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
