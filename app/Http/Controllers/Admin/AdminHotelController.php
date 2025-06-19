<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminHotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $users = User::all();
        $pemesanans = Pemesanan::with(['user', 'hotel'])->get();

        return view('admin.hotels.index', [
            'title' => 'Manajemen Hotel',
            'hotels' => $hotels,
            'users' => $users,
            'pemesanans' => $pemesanans,
        ]);
    }

    public function create()
    {
        return view('admin.hotels.create', [
            'title' => 'Tambah Hotel'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hotel' => 'required|string|max:255',
            'alamat_hotel' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'nullable|string',
            'harga' => 'nullable|numeric',
        ]);

        Hotel::create([
            'nama_hotel' => $request->nama_hotel,
            'alamat_hotel' => $request->alamat_hotel,
            'slug' => Str::slug($request->nama_hotel),
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'harga' => $request->harga,
            // 'gambar' => $request->gambar, // jika ada upload gambar
        ]);

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('admin.hotels.edit', [
            'title' => 'Edit Hotel',
            'hotel' => $hotel
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hotel' => 'required|string|max:255',
            'alamat_hotel' => 'required|string|max:255',
        ]);
        $hotel = Hotel::findOrFail($id);
        $slug = Str::slug($request->nama_hotel);

        $hotel->update([
            'nama_hotel' => $request->nama_hotel,
            'alamat_hotel' => $request->alamat_hotel,
            'slug' => $slug,
            'excerpt' => Str::limit($request->alamat_hotel, 150), // atau sesuai kebutuhan
        ]);
        return redirect()->route('admin.hotels.index')->with('success', 'Hotel berhasil diupdate.');
    }

    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return redirect()->route('admin.hotels.index')->with('success', 'Hotel berhasil dihapus.');
    }
}