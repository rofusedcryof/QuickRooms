@extends('layouts.main')

@section('container')

<div class="container mt-5" style="max-width: 900px; background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); color: black;">
    <h2 class="text-center mb-4">Formulir Pemesanan Hotel</h2>

    <form action="{{ route('pemesanan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="check_in" class="form-label">Tanggal Check-in</label>
            <input type="date" class="form-control" id="check_in" name="check_in" required>
        </div>

        <div class="mb-3">
            <label for="check_out" class="form-label">Tanggal Check-out</label>
            <input type="date" class="form-control" id="check_out" name="check_out" required>
        </div>

        <div class="mb-3">
            <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
            <select class="form-select" id="tipe_kamar" name="tipe_kamar" required>
                <option value=""></option>
                @foreach ($tipe_kamars as $tipe)
                <option value="{{ $tipe->id_tipe }}">{{ $tipe->jenis }} - {{ $tipe->harga }} (Kapasitas: {{ $tipe->kapasitas }})</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label for="tingkat_kamar" class="form-label">Nomor Kamar</label>
            <select class="form-select" id="tingkat_kamar" name="id_tingkat_kamar" required>
                <option value="">-- Pilih Nomor Kamar --</option>
                @foreach ($tingkat_kamars as $tingkat)
                <option value="{{ $tingkat->id_tingkat }}">
                    {{ $tingkat->nomor_kamar }} (Lantai {{ $tingkat->lantai }}, Status: {{ $tingkat->status }})
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
            <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" min="1" required>
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