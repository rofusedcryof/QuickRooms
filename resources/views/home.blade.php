@extends('layouts.main')

@section('container')

@foreach($daftar_hotel as $hotel)
<article class="mb-5">
        <img src="img/{{ $hotel['image'] }}" alt="mikael" width="500">

        <h2>
                <a href="/home/{{ $hotel['slug'] }}">{{ $hotel['title'] }}</a>

        </h2>
        <h2>{{ $hotel["nama"]}}</h2>
        <h2>{{ $hotel["alamat"]}}</h2>
        <p>{{ $hotel["deskripsi_hotel"]}}</p>
        <p>{{ $hotel["keunggulan_hotel"]}}</p>
</article>
@endforeach

@endsection