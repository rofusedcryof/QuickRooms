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
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
        'tipe_kamar' => 'required|exists:tipe_kamars,id_tipe',
        'id_tingkat_kamar' => 'required|exists:tingkat_kamars,id_tingkat',
        'jumlah_kamar' => 'required|integer|min:1',
        'catatan' => 'nullable|string|max:500',
    ]);

    Pemesanan::create([
        'nama' => $validated['nama'],
        'email' => $validated['email'],
        'check_in' => $validated['check_in'],
        'check_out' => $validated['check_out'],
        'id_tipe_kamar' => $validated['tipe_kamar'],
        'id_tingkat_kamar' => $validated['id_tingkat_kamar'],
        'jumlah_kamar' => $validated['jumlah_kamar'],
        'catatan' => $validated['catatan'],
    ]);

    return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil dibuat.');
}


    public function show($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('pemesanan.show', compact('pemesanan'));
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
