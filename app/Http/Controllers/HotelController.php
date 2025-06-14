<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\hotel;

class HotelController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "image" => "logo2.png",
            "name" => "QuickRoom",
            "daftar_hotel" => hotel::all() //daftar_hotel berisi method all di kelas model hotel
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
