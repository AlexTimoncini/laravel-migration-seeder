<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class HomeContorller extends Controller
{
    //

    public function index(){
        $trains = Train::all();
        return view('guest.home', compact('trains'));
    }
}
