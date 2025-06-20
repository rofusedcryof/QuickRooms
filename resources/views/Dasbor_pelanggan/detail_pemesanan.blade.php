{{-- filepath: resources/views/Dasbor_pelanggan/detail_pemesanan.blade.php --}}
@extends('layouts.main')

@section('container')
<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Pemesanan</h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless mb-0">
                <tr>
                    <th style="width: 40%;">Nama</th>
                    <td>{{ $pemesanan->pelanggan->user->nama }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $pemesanan->pelanggan->user->email }}</td>
                </tr>
                <tr>
                    <th>Tipe Kamar</th>
                    <td>{{ $pemesanan->tipe_Kamar->jenis ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nomor Kamar</th>
                    <td>{{ $pemesanan->tingkat_Kamar->nomor_kamar ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check-in</th>
                    <td>{{ $pemesanan->tanggal_checkin }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check-out</th>
                    <td>{{ $pemesanan->tanggal_checkout }}</td>
                </tr>
                <tr>
                    <th>Catatan</th>
                    <td>{{ $pemesanan->catatan ?: '-' }}</td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td>Rp{{ number_format($pemesanan->total_harga, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge {{ $pemesanan->status == 'booking' ? 'bg-warning text-dark' : 'bg-success' }}">
                            {{ ucfirst($pemesanan->status) }}
                        </span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection