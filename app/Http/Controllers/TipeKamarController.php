<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeKamar;

class TipeKamarController extends Controller
{
    public function index()
    {
        $tipeKamars = TipeKamar::all();
        return view('tipe_kamars.index', compact('tipeKamars'));
    }

    public function create()
    {
        return view('tipe_kamars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tipe' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        TipeKamar::create($request->all());
        return redirect()->route('tipe_kamars.index')->with('success', 'Tipe Kamar berhasil dibuat.');
    }

    public function show($id)
    {
        
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
}
