@extends('layouts.main')

@section('container')

<div class="container mt-5" style="max-width: 900px; background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); color: black;">
    <h2 class="text-center mb-4">Formulir Pemesanan Hotel</h2>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pemesanan.store') }}" method="POST">
        @csrf

        @if(auth()->check() && auth()->user()->pelanggan)
            <input type="hidden" name="id_pelanggan" value="{{ auth()->user()->pelanggan->id_pelanggan }}">
        @else
            <div class="alert alert-warning">
                Data pelanggan tidak ditemukan. Silakan login ulang atau hubungi admin.
            </div>
        @endif

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"
                value="{{ auth()->user()->nama ?? old('nama') }}" {{ auth()->check() ? 'readonly' : '' }} required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ auth()->user()->email ?? old('email') }}" {{ auth()->check() ? 'readonly' : '' }} required>
        </div>
        
        <div class="mb-3">
            <label for="tanggal_checkin" class="form-label">Tanggal Check-in</label>
            <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_checkout" class="form-label">Tanggal Check-out</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" required>
        </div>

        <div class="mb-3">
            <label for="id_tipe" class="form-label">Tipe Kamar</label>
            <select class="form-select" id="id_tipe" name="id_tipe" required>
                <option value="">-- Pilih Tipe Kamar --</option>
                @foreach ($tipe_kamars as $tipe)
                <option value="{{ $tipe->id_tipe }}">{{ $tipe->jenis }} - {{ $tipe->harga }} (Kapasitas: {{ $tipe->kapasitas }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_kamar" class="form-label">Nomor Kamar</label>
            <select class="form-select" id="id_kamar" name="id_kamar" required>
                <option value="">-- Pilih Nomor Kamar --</option>
                @foreach ($tingkat_kamars as $tingkat)
                <option value="{{ $tingkat->id_kamar }}">
                    {{ $tingkat->nomor_kamar }} (Lantai {{ $tingkat->lantai }}, Status: {{ $tingkat->status }})
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan Tambahan</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
        </div>
    </form>
</div>

@endsection