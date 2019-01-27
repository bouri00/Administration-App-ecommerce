<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Client;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class ClientController extends Controller
{

    public function index(){

        $client =Client::all();
        return view('Pages.client',['client'=>$client]);
      }
     public function addclient(){
       
        return view('Pages.addclient');
      }
  
     
        //Enregistrer une produit
    public function store(Request $request)
    {
        $client= new Client();
        $client->nom = $request->input('nom');   
        $client->prenom = $request->input('prenom');  
        $client->email = $request->input('email');
        $client->adresse = $request->input('adresse');   
        $client->tele = $request->input('tele');  
        $client->password = $request->input('password');  
        $client->save();
        return redirect('client');
      
    }

    //Recuperer les donnees d'une produit dans un formuler 
    public function edit($id)
    {
        $client = Client::find($id);
        return view('Pages.EditClient',['client'=>$client]);

    }
    //Permet de modifier les donnees d'une produit
    public function update($id, Request $request){
        $client = Client::find($id);
        $client= new Client();
        $client->nom = $request->input('nom');   
        $client->prenom = $request->input('prenom');  
        $client->email = $request->input('email');
        $client->adresse = $request->input('adresse');   
        $client->tele = $request->input('tele');  
        $client->password = $request->input('password');  
        $client->save();

        return redirect('/client');
        
    }

      public function destroy($id)
    {
        $client = Client::find($id);
        
        $client->delete();

        return redirect('/client');
    }

         public function show($id)
    {
        $client=Client::find($id);
        return view('Pages.showclient',['client'=>$client]);
    }



}
