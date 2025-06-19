@extends('layouts.main')
@section('title', 'Edit Hotel')
@section('container')
<div class="container">
    <h2>Edit Hotel</h2>
    <form action="{{ route('admin.hotels.update', $hotel->id_hotel) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_hotel" class="form-label">Nama Hotel</label>
            <input type="text" class="form-control" id="nama_hotel" name="nama_hotel" value="{{ $hotel->nama_hotel }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat_hotel" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat_hotel" name="alamat_hotel" value="{{ $hotel->alamat_hotel }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $hotel->harga }}" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Details</label>
            <textarea class="form-control" id="body" name="body" rows="2" required>{{ $hotel->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection