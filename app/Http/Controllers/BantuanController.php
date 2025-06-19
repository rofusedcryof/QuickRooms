<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function index(){
        return view('Dasbor/PusatBantuan', [
        'title' => "Bantuan",
        'name' => 'QuickRoom'
    ]);
    }
}
