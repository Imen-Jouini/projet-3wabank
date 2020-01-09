<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $clients=Client::all();
       // $clients=Client::orderBy('prenom')->get();
        $clients=Client::orderBy('prenom')->paginate(10);
        return view ('client/index',compact('clients'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client=new client;
        return view ('client/create',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validate($request, $this->validattionRules());
        $client = Client::create($data);
        return redirect()->route('client.show', $client)->with('successNewClient', 'client ajouté avec succés');

        //dd($client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('client/show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client/edit')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
     
      $data = $this->validate($request,$this->validattionRules());
        $client->update($data);
           return redirect()->route('client.show', $client)->with('successNewClient', 'client modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
    private function validattionRules()
    {
      return ["nom"=>'required|max:50|min:2',
            "prenom"=>'required|max:50|min:2',
            "adresse"=>'required|max:70|min:10',
            "datNaissance"=>'required|date',
            "Tel"=>'required|digits:8']; 
    }
}
