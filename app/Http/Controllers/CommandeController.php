<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Commande;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class CommandeController extends Controller
{
    
    public function index(){
    	$commande = Commande::all();
    	return view('Pages.commande',['commande'=>$commande]);
      }
       public function addcommande(){
       
        return view('Pages.addcommande');
      }
  
     
        //Enregistrer une User
    public function store(Request $request)
    {
        $commande= new Commande();
        $commande->quantite_com = $request->input('quantite_com'); 
        $commande->date_com = $request->input('date_com');   
        $commande->quantite = $request->input('quantite');
        $commande->prod = $request->input('prod');
        $commande->save();
        return redirect('commande');
      
    }

    //Recuperer les donnees d'une commande dans un formuler 
    public function edit($id)
    {
        $commande = Commande::find($id);
        return view('Pages.EditCommande',['commande'=>$commande]);

    }
    //Permet de modifier les donnees d'une commande
    public function update($id, Request $request){
        $commande = Commande::find($id);
        $commande->quantite_com = $request->input('quantite_com'); 
        $commande->date_com = $request->input('date_com');   
        $commande->quantite = $request->input('quantite');
        $commande->prod = $request->input('prod');
        $commande->save();
        return redirect('/commande');
        
    }

      public function destroy($id)
    {
        $commande = Commande::find($id);
        
        $commande->delete();

        return redirect('/commande');
    }

       public function show($id)
    {
        $commande=Commande::find($id);
        return view('Pages.showcommande',['commande'=>$commande]);
    }

   

}
