@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($daftar_hotel->count())

<div class="row">
    @foreach($daftar_hotel as $hotel)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/'.$hotel->gambar) }}" class="card-img-top" alt="{{ $hotel->nama_hotel }}" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $hotel->nama_hotel }}</h5>
                <p class="card-subtitle mb-2 text-muted">{{ $hotel->alamat_hotel }}</p>
                <p class="card-text flex-grow-1">{{ $hotel->excerpt }}</p>
                <a href="/home/{{ $hotel->slug }}" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@else
<p class="text-center fs-4">Hotel Tidak Ditemukan</p>
@endif
@endsection
