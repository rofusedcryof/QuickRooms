<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class AdminHotelController extends Controller
{
    /**daftar hotel */
    public function index()
    {
        $hotels = Hotel::all();

        return view('admin.hotels.index', [
            'title' => 'Manajemen Hotel',
            'hotels' => $hotels
        ]);
        
    }
}