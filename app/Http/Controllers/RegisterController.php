<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registrasi.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        // Simpan ke tabel users
        $user = User::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'pelanggan',
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
        ]);

        // Simpan ke tabel pelanggans (hanya id_user, id_hotel jika ada)
        \App\Models\Pelanggan::create([
            'id_user' => $user->id_user,
            // 'id_hotel' => $idHotelJikaAda,
        ]);

        auth()->login($user);

        return redirect('/home')->with('success', 'Registrasi berhasil. Selamat datang!');
    }
}