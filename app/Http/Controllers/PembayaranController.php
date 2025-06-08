<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('pemesanan')->get();
        return view('pembayarans.index', compact('pembayarans'));
    }

    public function create()
    {
        $pemesanan = Pemesanan::all();// ambil semua data pemesanan
        return view('pembayaran.create', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pemesanan' => 'required|exists:pemesanans,id_pemesanan',
            'metode_pembayaran' => 'required|string|max:255',
            'jumlah_bayar' => 'required|numeric|min:0',
            'status_pembayaran' => 'required|string|max:255',
        ]);

        Pembayaran::create($request->all());
        return redirect()->route('pembayarans.index')->with('success', 'Pembayaran berhasil dibuat.');
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::with('pemesanan')->findOrFail($id);
        return view('pembayarans.show', compact('pembayaran'));
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {
       
    }

    public function pembayaranPemesanan($id)
    {
       
    }
    public function pembayaranKonfirmasi($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update(['status_pembayaran' => 'Terkonfirmasi']);
        return redirect()->route('pembayarans.index')->with('success', 'Pembayaran berhasil dikonfirmasi.');
    }
}
