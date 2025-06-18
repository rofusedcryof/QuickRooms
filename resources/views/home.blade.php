@extends('layouts.main')

@section('container')

@foreach($daftar_hotel as $hotel)

<article class="mb-5 border-buttom pb-4">
        <img src="{{ asset('storage/'.$hotel->gambar) }}" alt="{{ $hotel->nama_hotel }}" width="500">

        <h2>
                {{ $hotel->nama_hotel }}
        </h2>

        <h2>{{ $hotel->alamat_hotel }}</h2>
        <p>{{ $hotel->excerpt }}</p>

        <a href="/home/{{ $hotel->slug }}" class="text-decoration-none">Lihat Selengkapnya</a>
</article>

@endforeach

@endsection