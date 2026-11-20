<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Client;

class clientC extends Controller
{

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

    public function connexionSaisir()
    {
        return view('connexionclientV');
    }

    public function connexionExecuter(Request $request)
    {
        $client = Client::where('mail', $request->txtMail)->first();

        if ($client && Hash::check($request->txtMotpasse, $client->motpasse)) {
            session(['client' => $client]);
            return redirect()->route('client');
        }

        return redirect();//->back()->with('error', 'Identifiants incorrects');
    }

    public function deconnexionExecuter()
    {
        session(['client' => null]);
        return redirect()->route('index');
    }
}
