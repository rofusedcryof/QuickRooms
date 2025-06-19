@extends('layouts.main')

@section('container')

<div class="container">
    <div class="card mb-4 shadow">
        <img src="{{ asset('img/' . $hotel->gambar) }}" class="card-img-top" alt="{{ $hotel->nama_hotel }}" style="height: 400px; object-fit: cover;">

        <div class="card-body">
            <h2 class="card-title">{{ $hotel->nama_hotel }}</h2>
            <h5 class="card-subtitle mb-2 text-muted">{{ $hotel->alamat_hotel }}</h5>

            <div class="d-flex justify-content-between align-items-center my-3">
                <span class="badge bg-success fs-5">Rp {{ number_format($hotel->harga, 0, ',', '.') }}</span>
            </div>

            <p class="card-text">{{ $hotel->body }}</p>

            <div class="d-flex justify-content-between mt-4">
                <a href="/home" class="btn btn-outline-secondary">← Kembali ke Home</a>
                <a href="/pemesanan" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </div>
</div>

@endsection