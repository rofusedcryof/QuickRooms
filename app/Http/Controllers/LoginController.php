<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.index'); // View untuk form login
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
    
            // Cek role user setelah login
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.hotels.index')->with('success', 'Login admin berhasil.');
            }
    
            // Jika pelanggan
            return redirect()->intended('/home')->with('success', 'Login berhasil.');
        }
    
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('Dasbor/home')->with('success', 'Logout berhasil.');
    }

    public function index()
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login
        $daftar_hotel = Hotel::paginate(10);

        return view('Dasbor_pelanggan.home', [
            'title' => 'Home',
            'daftar_hotel' => $daftar_hotel,
            'user' => $user,
        ]);
    }
}