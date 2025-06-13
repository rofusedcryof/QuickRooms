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

    public function show($slug){
        return view('hotel', [
        "title" => "Single Hotel",
        "name" => "QuickRoom",
        "hotel" => hotel::find($slug)
    ]);
    }
}
