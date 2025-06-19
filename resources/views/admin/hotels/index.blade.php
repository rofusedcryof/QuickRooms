@extends('layouts.main')

@section('title', 'Manajemen Hotel')

@section('container')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-5 fw-bold">Manajemen Hotel</h1>
            <p class="text-muted">Kelola semua data Hotel dan Kamar yang tersedia di aplikasi.</p>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-beetween align-items-center">
            Daftar hotel
            <a href="#" class="btn btn-primary btn-sm">Tambah Hotel Baru</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($hotels as $hotel)
                    <tr>
                        <th scope="row">{{  $loop->iteration }}</th>
                        <td>{{ $hotel->nama_hotel }}</td>
                        <td>{{ $hotel->lokasi }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div
@endsection