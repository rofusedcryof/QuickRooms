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
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        // Simpan data ke tabel `users`
        $user = User::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'pelanggan', // Set default role sebagai pelanggan
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
        ]);

        // Login otomatis setelah registrasi
        auth()->login($user);

        // Redirect ke halaman home atau dashboard pelanggan
        return redirect('/home')->with('success', 'Registrasi berhasil. Selamat datang!');
    }
}