<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      $clients = Client::all();
      return view('clients.index',['clients' => $clients]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validateData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:clients',
            'password' => 'required',
            'sexe '=>'request',
            'telephone' => 'required|unique:clients'

        ]);





            $client = new Client();
            $client->name = $validateData->input('name');
            $client->prenom = $validateData->input('prenom');
            $client->email = $validateData->input('email');
            $client->password = Hash::make($validateData->input('password'));
            $client->region = $validateData->input('region');
            $client->ville = $validateData->input('ville');
            $client->adresse = $validateData->input('adresse');
            $client->mode_de_paiement = $validateData->input('mode de paiement');
            $client->telephone = $validateData->input('telephone');

            $client->save();
            return response()->json(['message' => 'Client create successfully', 'client' => $client], 201);
            return redirect()->route('clients.index');
            return redirect()->route('clients.create')->wuth('success', 'client enregistrer avec succes!');
        }

public function create(){
return view('clients.create');

}




    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
