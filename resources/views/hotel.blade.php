@extends('layouts.main')

@section('container')
<article>
    <img src="/img/{{ $hotel['image'] }}" alt="{{ $hotel['nama'] }}" width="500">
    <h2>{{ $hotel['nama'] }}</h2>
    <h4>{{ $hotel['alamat'] }}</h4>
    <p>{{ $hotel['deskripsi_hotel'] }}</p>
    <p><strong>Keunggulan:</strong> {{ $hotel['keunggulan_hotel'] }}</p>
</article>

<a href="/home">Kembali ke Home</a>
@endsection
