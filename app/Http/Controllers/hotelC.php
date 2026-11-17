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
        return view('indexV', ['hotels' => Hotel::all()]);  
    }
    

    public function clientSaisir()
    {
        return view('creerclientV');
    }

    public function clientCreer(Request $request)
    {
        $data = new client();

        $data->nom = $request->txtNom;
        $data->mail = $request->txtMail;
        $data->motpasse = Hash::make($request->input('txtMotpasse'));

        $data->save();

        session(['client' => $data]);
        
        return redirect()->route('client');
    }
}
