<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produit;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class ProduitController extends Controller
{
     public function index(){

        $produit =produit::all();
        return view('Pages.produit',['produit'=>$produit]);
      }
     public function addproduit(){
       
        return view('Pages.addproduit');
      }
  
     
        //Enregistrer une produit
    public function store(Request $request)
    {
        $produit= new produit();
        $produit->description = $request->input('description');   
        $produit->titre = $request->input('titre');  
        $produit->quantite = $request->input('quantite');
        $produit->prix = $request->input('prix');   
        $produit->imagePath = $request->input('imagePath');  
        $produit->id_cat = $request->input('id_cat');  
        $produit->save();
        return redirect('produit');
      
    }

    //Recuperer les donnees d'une produit dans un formuler 
    public function edit($id)
    {
        $produit = produit::find($id);
        return view('Pages.EditProduit',['produit'=>$produit]);

    }
    //Permet de modifier les donnees d'une produit
    public function update($id, Request $request){
        $produit = produit::find($id);
        
        $produit->description = $request->input('description');   
        $produit->titre = $request->input('titre');  
        $produit->quantite = $request->input('quantite');
        $produit->prix = $request->input('prix');   
        $produit->imagePath = $request->input('imagePath');  
        $produit->libelle = $request->input('libelle');  
        $produit->save();

        return redirect('/produit');
        
    }

      public function destroy($id)
    {
        $produit = produit::find($id);
        
        $produit->delete();

        return redirect('/produit');
    }

      public function show($id)
    {
        $produit=produit::find($id);
        return view('Pages.showproduit',['produit'=>$produit]);
    }


}
