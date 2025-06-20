<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\TipeKamar;
use App\Models\TingkatKamar;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        $tipe_kamars = TipeKamar::all();
        $tingkat_kamars = TingkatKamar::all();

        return view('Dasbor_pelanggan.pemesanan', [
            'pemesanan' => $pemesanan,
            'tipe_kamars' => $tipe_kamars,
            'tingkat_kamars' => $tingkat_kamars,
            'title' => 'Form Pemesanan'
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id_pelanggan',
            'id_kamar' => 'required|exists:tingkat_kamars,id_kamar',
            'id_tipe' => 'required|exists:tipe_kamars,id_tipe',
            'tanggal_checkin' => 'required|date|after_or_equal:today',
            'tanggal_checkout' => 'required|date|after:tanggal_checkin',
            'catatan' => 'nullable|string',
        ]);

        // Hitung total harga (misal: harga tipe kamar x total_harga)
        $tipe = \App\Models\TipeKamar::find($validated['id_tipe']);
        $total_harga = $tipe ? $tipe->harga : 0;

        $pemesanan = \App\Models\Pemesanan::create([
            'id_pelanggan' => $validated['id_pelanggan'],
            'id_kamar' => $validated['id_kamar'],
            'id_tipe' => $validated['id_tipe'],
            'tanggal_checkin' => $validated['tanggal_checkin'],
            'tanggal_checkout' => $validated['tanggal_checkout'],
            'catatan' => $validated['catatan'] ?? null,
            'total_harga' => $total_harga,
            'status' => 'booking',
        ]);

        return redirect()->route('pemesanan.show', $pemesanan->id_pesanan)
            ->with('success', 'Pemesanan berhasil!');
    }



    public function show($id_pesanan)
    {
        $pemesanan = \App\Models\Pemesanan::with(['pelanggan.user', 'tipe_kamar', 'tingkat_kamar'])->findOrFail($id_pesanan);

        return view('Dasbor_pelanggan.detail_pemesanan', [
            'pemesanan' => $pemesanan,
            'title' => 'Detail Pemesanan'
        ]);
    }

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan deleted successfully');
    }
}
