<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;

class ClientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::all();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameClient' => 'required',
            'ageClient' => 'required',
            'adressClient' => 'required',
            'emailClient' => 'required|email'
        ]);

        $client = new Clients;
        $client->name = $request->input('nameClient');
        $client->age = $request->input('ageClient');
        $client->adress = $request->input('adressClient');
        $client->email = $request->input('emailClient');

        $client->save();
        return redirect('/clients');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Clients::find($id);
            if(isset($client)) {
                return view('editClient', compact('client'));
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = Clients::find($id);
            if(isset($client)){
                $client->name = $request->input('nameClient');
                $client->age = $request->input('ageClient');
                $client->adress = $request->input('adressClient');
                $client->email = $request->input('emailClient');

                $client->save();

                return redirect('/clients');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Clients::find($id);
            if(isset($client)) {
                $client->delete();
                
                return redirect('/clients');
            }
    }
}
