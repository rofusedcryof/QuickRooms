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

    <div class="card shadow-sm mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            Daftar hotel
            <a href="{{ route('admin.hotels.create') }}" class="btn btn-primary btn-sm">Tambah Hotel Baru</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Hotel</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->nama_hotel }}</td>
                            <td>{{ $hotel->alamat_hotel }}</td>
                            <td>
                                <a href="{{ route('admin.hotels.edit', $hotel->id_hotel) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.hotels.destroy', $hotel->id_hotel) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus hotel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header">
            Daftar Pengguna
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header">
            Daftar Pemesanan
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>Hotel</th>
                        <th>Tanggal Check-in</th>
                        <th>Tanggal Check-out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemesanans as $pemesanan)
                        <tr>
                            <td>{{ $pemesanan->user->nama ?? '-' }}</td>
                            <td>{{ $pemesanan->hotel->nama ?? '-' }}</td>
                            <td>{{ $pemesanan->check_in }}</td>
                            <td>{{ $pemesanan->check_out }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection