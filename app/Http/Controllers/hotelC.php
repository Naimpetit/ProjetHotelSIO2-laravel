<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;

class hotelC extends Controller
{
    public function index()
    {
        return view('indexV', ['hotels' => Hotel::all()]);  
    }
    
    public function rechercher()
    {
        return view('rechercherV', ['hotels' => Hotel::all()]);  
    }
}
