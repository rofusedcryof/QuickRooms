@extends('layouts.main')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        header {
            background-color: #1b263b;
            /* lebih gelap */
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 2.5rem;
        }

        header p {
            color: rgb(255, 255, 255);
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            background-color: rgb(255, 255, 255);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        main h2 {
            color: rgb(0, 0, 0);
            margin-bottom: 10px;
            font-size: 1.8rem;
        }

        p,
        li {
            font-size: 1rem;
            color: rgb(0, 0, 0);
        }

        ul {
            margin: 10px 0 30px 20px;
        }

        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #3a7ca5;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #2e5d84;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            color: #bbbbbb;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            main {
                padding: 20px;
            }
        }
    </style>

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