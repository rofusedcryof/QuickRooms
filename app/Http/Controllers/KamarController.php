<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TingkatKamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TingkatKamar::with('tipe')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_kamar' => 'required|unique:tingkat_kamars',
            'lantai' => 'required',
            'status' => 'required',
            'id_tipe' => 'required|exists:tipe_kamars,id_tipe'
        ]);

        return tingkat_kamar::create($request->all());
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
