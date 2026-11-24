<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Hotel;
use App\Models\Client;

class hotelC extends Controller
{
    public function index()
    {
        return view('indexV');  
    }
    
    public function lsthotels()
    {
        return view('lsthotelV', ['hotels' => Hotel::all()]);  
    }

    public function rechercher()
    {
        return view('rechercherV', ['hotels' => Hotel::all()]);  
    }
}
