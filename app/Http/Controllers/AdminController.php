<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use App\Models\tingkat_kamar;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return [
            'total_pemesanan' => Pemesanan::count(),
            'total_pembayaran' => Pembayaran::sum('jumlah_bayar'),
            'kamar_tersedia' => tingkat_kamar::where('status', '!=', 'terisi')->count()
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
