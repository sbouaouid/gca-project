<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Auth::User()->clients();

        return view('dashboard', [
            'client' => $clients
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajouterClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* ********** VALIDATION DES CHAMPS DU FORMULAIRE ************* */
        $request->validate([
            'nom' => 'required|max:25',
            'adresse' => 'required|max:255',
            'ville' => 'required',
            'email'=> 'required|email|unique:users',
            'telephone1'=> 'required|digits:10',
            'telephone2'=> 'nullable|digits:10',
            'fax'=>'nullable|digits:10',
            'observation'=>'nullable',
            'typeClient'=>'required'      
        ]);
        /* ************************************************************ */

        /* ***** ENREGISTREMENT DES INFORMATIONS DANS LA BASE DE DONNEES ******* */
        $client = new Client();
        $client->user_id=Auth::user()->id;
        $client->nom = $request->input('nom');
        $client->adresse= $request->input('adresse');
        $client->ville= $request->input('ville');
        $client->email= $request -> input('email');
        $client->téléphone1= $request->input('telephone1');
        $client->téléphone2= $request->input('telephone2');
        $client->fax= $request->input('fax');
        $client->observation_client= $request->input('observation');
        $client->type= $request->input('typeClient');
        $client->save();
        /* ********************************************************************* */

        /***  REDIRECTION VERS LA FICHE DESCRIPTIVE DU CLIENT ***/ 
        return redirect()-> route('client.show',$client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        /*$leClient = Client::find($id);

        return view('ficheClient', [
            'nom'=> $leClient->nom,
            'adresse'=> $leClient->adresse,
            'ville'=> $leClient->ville,
            'telephone1' => $leClient->téléphone1,
            'telephone2' => $leClient->téléphone2,
            'fax' => $leClient->fax,
            'email' => $leClient->email,
            'observation' => $leClient->observation_client, 
            'type' => $leClient->type
        ]);*/

        return view('ficheClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('modifierClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('dashboard')->with('success', 'Le client a été supprimé');
    }

}
