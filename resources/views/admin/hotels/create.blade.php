@extends('layouts.main')
@section('title', 'Tambah Hotel')
@section('container')
<div class="container">
    <h2>Tambah Hotel Baru</h2>
    <form action="{{ route('admin.hotels.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_hotel" class="form-label">Nama Hotel</label>
            <input type="text" class="form-control" id="nama_hotel" name="nama_hotel" required>
        </div>
        <div class="mb-3">
            <label for="alamat_hotel" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat_hotel" name="alamat_hotel" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Details</label>
            <textarea class="form-control" id="body" name="body" rows="2" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection