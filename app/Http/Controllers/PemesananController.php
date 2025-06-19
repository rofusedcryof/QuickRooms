<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all(); 
        return view('pemesanan.index', compact('pemesanan')); 
    }

   public function create()
{
    return view('pemesanan', [
        'title' => 'Form Pemesanan',
        'name' => 'Nama Pengguna' // Ganti sesuai kebutuhan
    ]);
}

    public function store(Request $request)
    {
        
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
