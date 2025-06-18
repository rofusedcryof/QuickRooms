<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\hotel;

class HotelController extends Controller
{
    public function index()
    {
        $home =hotel::latest();

        if(request('search')){
            $home->where('nama_hotel', 'like', '%' . request('search') . '%')
                ->orWhere('alamat_hotel', 'like', '%' . request('search') . '%');
        }

        return view('home', [
            "title" => "Daftar Hotel",
            "image" => "logo2.png",
            "name" => "QuickRoom",
            "daftar_hotel" => $home->get()
        ]);
    }

    // public function show($id)
    // {
    //     return view('hotel', [
    //         "title" => "Single Hotel",
    //         "name" => "QuickRoom",
    //         "hotel" => hotel::findOrFail($id) // findOrFail lebih aman
    //     ]);
    // }
    public function show(hotel $hotel)
    {
        return view('hotel', [
            "title" => "Single Hotel",
            "name" => "QuickRoom",
            "hotel" => $hotel
        ]);
    }


}
