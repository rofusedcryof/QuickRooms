@extends('layouts.main')

@section('container')

    <header>
        <h1>{{ $name }}</h1>
        <p>{{ $tagline }}</p>
    </header>

    <main>
        <div class="text-center">
            <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
        </div>

        <h2>{{ $name }}</h2>
        <p>
            <strong>{{ $name }} </strong> {{ $desSing}}
        </p>

        <h2>Fitur Unggulan</h2>
        <ul>
            <li>{{ $li1 }}</li>
            <li>{{ $li2 }}</li>
            <li>{{ $li3 }}</li>
            <li>{{ $li4 }}</li>
            <li>{{ $li5 }}</li>
        </ul>

        <h2>Misi Kami</h2>
        <p>{{ $misiKami}}</p>

        <a href="#" class="cta-button">Kunjungi Platform</a>
    </main>

    <footer>
        &copy; 2025 QuickRoom. Seluruh hak cipta dilindungi.
    </footer>

@endsection