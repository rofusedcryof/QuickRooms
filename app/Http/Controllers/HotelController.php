<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\hotel;

class HotelController extends Controller
{
    public function index()
    {

        

        return view('Dasbor/home', [
            "title" => "Daftar Hotel",
            "image" => "logo2.png",
            "name" => "QuickRoom",
            "daftar_hotel" => hotel::latest()->filter(request(['search']))->paginate(10)
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
        return view('Dasbor/hotel', [
            "title" => "Single Hotel",
            "name" => "QuickRoom",
            "hotel" => $hotel
        ]);
    }


}
