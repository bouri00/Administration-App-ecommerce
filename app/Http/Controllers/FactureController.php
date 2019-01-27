<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Facture;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class FactureController extends Controller
{

    public function index(){
       $facture =Facture::all();
       return view('Pages.facture',['facture'=>$facture]);
      }
    public function addfacture(){
       
        return view('Pages.addfacture');
      }
  
     
        //Enregistrer une facture
    public function store(Request $request)
    {
        $facture= new Facture();
        $facture->description = $request->input('description');  
        $facture->idprod = $request->input('idprod');  
        $facture->description = $request->input('description');  
        $facture->idpclient = $request->input('idpclient');  
        $facture->idpcom = $request->input('idpcom');
        $facture->datelivraison = $request->input('datelivraison');  
        $facture->save();
        return redirect('facture');
      
    }

    //Recuperer les donnees d'une users dans un formuler 
    public function edit($id)
    {
        $facture = Facture::find($id);
        return view('Pages.EditFacture',['facture'=>$facture]);

    }
    //Permet de modifier les donnees d'une produit
    public function update($id, Request $request){
        $facture = Facture::find($id);
         $facture->description = $request->input('description');  
        $facture->idprod = $request->input('idprod');  
        $facture->description = $request->input('description');  
        $facture->idpclient = $request->input('idpclient');  
        $facture->idpcom = $request->input('idpcom');
        $facture->datelivraison = $request->input('datelivraison'); 
        $facture->save();
        return redirect('/facture');
        
    }

      public function destroy($id)
    {
        $facture = Facture::find($id);
        
        $facture->delete();

        return redirect('/facture');
    }

         public function show($id)
    {
        $facture=Facture::find($id);
        return view('Pages.showfacture',['facture'=>$facture]);
    }

    

}
