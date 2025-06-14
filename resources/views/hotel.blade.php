@extends('layouts.main')

@section('container')

<article>
    <img src="{{ asset('storage/'.$hotel->gambar) }}" alt="{{ $hotel->nama_hotel }}" width="500">
    <h2>{{ $hotel->nama_hotel }}</h2>
    <h2>{{ $hotel->alamat_hotel }}</h2>
    {{ $hotel->body }}
</article>

<a href="/home">Kembali ke Home</a>
@endsection