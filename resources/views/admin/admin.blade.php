{{-- /resources/views/admin/admin.blade.php --}}

{{-- Menggunakan layout utama yang sudah ada di layouts/main.blade.php --}}
@extends('layouts.main')

{{-- Mengatur judul halaman secara dinamis dari variabel $title yang dikirim Controller --}}
@section('title', $title)

{{-- Memulai bagian konten utama yang akan dimasukkan ke @yield('container') di layout --}}
@section('container')
<div class="container">
    {{-- Header Halaman --}}
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-5 fw-bold">Dasbor Administrator</h1>
            {{-- Menggunakan kolom 'nama' yang benar --}}
            <p class="text-muted">Selamat datang kembali, {{ Auth::user()->nama }}. Berikut adalah ringkasan aktivitas aplikasi Anda.</p>
        </div>
    </div>

    {{-- Kartu Statistik --}}
    <div class="row">
        {{-- Kartu Total Pemesanan --}}
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">TOTAL PEMESANAN</h5>
                            {{-- Menampilkan variabel $total_pemesanan dari Controller --}}
                            <p class="card-text fs-1 fw-bold">{{ $total_pemesanan }}</p>
                        </div>
                        <i class="fas fa-shopping-cart fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kartu Total Pendapatan --}}
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">TOTAL PENDAPATAN</h5>
                            {{-- Menampilkan variabel $total_pembayaran dan memformatnya sebagai Rupiah --}}
                            <p class="card-text fs-4 fw-bold">Rp {{ number_format($total_pembayaran, 0, ',', '.') }}</p>
                        </div>
                        <i class="fas fa-dollar-sign fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kartu Kamar Tersedia --}}
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-info shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">KAMAR TERSEDIA</h5>
                            {{-- Menampilkan variabel $kamar_tersedia dari Controller --}}
                            <p class="card-text fs-1 fw-bold">{{ $kamar_tersedia }}</p>
                        </div>
                        <i class="fas fa-bed fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Menu Navigasi Admin --}}
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Menu Manajemen
                </div>
                <div class="list-group list-group-flush">
                    {{-- Ganti '#' dengan route yang benar jika sudah dibuat --}}
                    <a href="#" class="list-group-item list-group-item-action">Manajemen Pengguna</a>
                    <a href="{{ route('admin.hotels.index') }}" class="list-group-item list-group-item-action">Manajemen Hotel & Kamar</a>
                    <a href="#" class="list-group-item list-group-item-action">Manajemen Pemesanan</a>
                    <a href="#" class="list-group-item list-group-item-action">Lihat Laporan Keuangan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Menambahkan CSS khusus untuk halaman ini (Font Awesome untuk ikon) --}}
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush