<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    //     $this->middleware('role:commercial');
    //     $this->middleware('role:admin');
    // }
    private static function getData(){
        return [
            ['id'=>1, 'name'=>'client1', 'email'=>'a@gmail.com', 'phone'=>'123456789', 'address'=>'casablanca'],
            ['id'=>2, 'name'=>'client2', 'email'=>'b@gmail.com', 'phone'=>'123456789', 'address'=>'casablanca'],
            ['id'=>3, 'name'=>'client3', 'email'=>'c@gmail.com', 'phone'=>'123456789', 'address'=>'casablanca'],
            ['id'=>4, 'name'=>'client4', 'email'=>'d@gmail.com', 'phone'=>'123456789', 'address'=>'casablanca'],
            ['id'=>5, 'name'=>'client5', 'email'=>'e@gmail.com', 'phone'=>'123456789', 'address'=>'casablanca'],
        
        ];
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//using static data 
        // return view('clients.index', [
        //     'clients' => self::getData()
        // ]);
//using model
        return view('clients.index', [
            'clients' => client::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client-name' => 'required',
            'entreprise-name' => 'required',
            'date-demande' => 'required',
            'origine-demande' => 'required',
            'contact' => 'required',
            'type-besoin' => 'required',
            'categorie-besoin' => 'required',
            'nature-service' => 'required',
            'marchandiz'=> 'required',
            'nom-commerciale'=> 'required',
            'date-visite' => 'required',
            'type-cadence' => 'required',
            'detail-service' => 'required',
            'client-address' => 'required',
            'intervention' => 'required'
        ]);
        
        $client = new client();
        $client->name = strip_tags($request->input('client-name'));
        $client->entrepriseName = strip_tags($request->input('entreprise-name'));
        $client->dateDemande = strip_tags($request->input('date-demande'));
        $client->origineDemande = strip_tags($request->input('origine-demande'));
        $client->contact = strip_tags($request->input('contact'));
        $client->typeBesoin = strip_tags($request->input('type-besoin'));
        $client->categorieBesoin = strip_tags($request->input('categorie-besoin'));
        $client->natureService = strip_tags($request->input('nature-service'));
        $client->marchandiz = strip_tags($request->input('marchandiz'));
        $client->nomCommerciale = strip_tags($request->input('nom-commerciale'));
        $client->dateVisite = strip_tags($request->input('date-visite'));
        $client->typeCadence = strip_tags($request->input('type-cadence'));
        $client->address = strip_tags($request->input('client-address'));
        $client->intervention = strip_tags($request->input('intervention'));
        $client->detailService = strip_tags($request->input('detail-service'));
        $client->save();
        return redirect()->route('clients.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($client)
    {

//using static data
        // $clients = self::getData();
        // $index = array_search($client, array_column($clients, 'id'));

        // if($index === false){
        //     abort(404);
        // }
//using model
        // $index = Client::findOrFail($client);
        // return view('clients.show',[ 'client'=>$index]);
//resumer
        return view('clients.show', [
            'client' => client::findOrFail($client)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($client)
    {
        return view('clients.edit',[
            'client' => Client::findOrFail($client)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $client)
    {
        $request->validate([
            'client-name' => 'required',
            'entreprise-name' => 'required',
            'origine-demande' => 'required',
            'contact' => 'required',
            'type-besoin' => 'required',
            'categorie-besoin' => 'required',
            'nature-service' => 'required',
            'marchandiz'=> 'required',
            'nom-commerciale'=> 'required',
            'date-visite' => 'required',
            'type-cadence' => 'required',
            'detail-service' => 'required',
            'client-address' => 'required',
            'intervention' => 'required'

        ]);

        $to_update = Client::findOrFail($client);
        $to_update->name = strip_tags($request->input('client-name'));
        $to_update->entrepriseName = strip_tags($request->input('entreprise-name'));
        $to_update->dateDemande = strip_tags($request->input('date-demande'));
        $to_update->origineDemande = strip_tags($request->input('origine-demande'));
        $to_update->contact = strip_tags($request->input('contact'));
        $to_update->typeBesoin = strip_tags($request->input('type-besoin'));
        $to_update->categorieBesoin = strip_tags($request->input('categorie-besoin'));
        $to_update->natureService = strip_tags($request->input('nature-service'));
        $to_update->marchandiz = strip_tags($request->input('marchandiz'));
        $to_update->nomCommerciale = strip_tags($request->input('nom-commerciale'));
        $to_update->dateVisite = strip_tags($request->input('date-visite'));
        $to_update->typeCadence = strip_tags($request->input('type-cadence'));
        $to_update->detailService = strip_tags($request->input('detail-service'));
        $to_update->address = strip_tags($request->input('client-address'));
        $to_update->intervention = strip_tags($request->input('intervention'));
        $to_update->save();
        return redirect()->route('clients.show', $client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $client)
    {
        $to_delete=Client::findOrFail($client);
        $to_delete->delete();
        return redirect()->route('clients.index');
    }
}
