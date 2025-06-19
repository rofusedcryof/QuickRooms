<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all(); 
        return view('Dasbor_pelanggan/pemesanan', [
            'pemesanan' => $pemesanan,
            'title' => 'Daftar Pemesanan'
        ]);
    }

   public function create()
{
    return view('Dasbor_pelanggan/pemesanan', [
        'title' => 'Pemesanan', // Replace with a string or appropriate value
        'name' => 'Nama Pengguna' // Ganti sesuai kebutuhan
    ]);
}

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'tipe_kamar' => 'required|string',
            'jumlah_kamar' => 'required|integer|min:1',
            'catatan' => 'nullable|string|max:500',
        ]);

        // Simpan data ke database
        Pemesanan::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'tipe_kamar' => $validated['tipe_kamar'],
            'jumlah_kamar' => $validated['jumlah_kamar'],
            'catatan' => $validated['catatan'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil dibuat.');
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::findOrFail($id); 
        return view('pemesanan.show', compact('pemesanan'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete(); 
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan deleted successfully');
    }
}