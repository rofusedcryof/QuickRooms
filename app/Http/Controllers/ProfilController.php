<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        return view('Dasbor.profil', [
            "title" => "Profil",
            "user" => $user, // Kirim data pengguna ke view
        ]);
    }
}
