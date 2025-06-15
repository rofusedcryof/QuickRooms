@extends('layouts.main')

@section('container')

@foreach($daftar_hotel as $hotel)

<article class="mb-5">
        <img src="{{ asset('storage/'.$hotel->gambar) }}" alt="{{ $hotel->nama_hotel }}" width="500">

        <h2>
                <a href="/home/{{ $hotel->slug }}">{{ $hotel->nama_hotel }}</a>
        </h2>

        <h2>{{ $hotel->alamat_hotel }}</h2>
        <p>{{ $hotel->excerpt }}</p>
</article>

@endforeach

@endsection