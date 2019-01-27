<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Facture;
use App\produit;
use App\Commande;
use DB;


class AcueilController extends Controller
{
    public function index()
    {
        $data = DB::table('users')
       ->select(
        DB::raw('name as name'),
        DB::raw('count(*) as number'))
       ->groupBy('name')
       ->get();
       $array[] = ['Name', 'Number'];
        foreach($data as $key => $value)
       {
        $array[++$key] = [$value->name, $value->number];
        }  
        $user = User::count();
        $commande = Commande::count();
        $facture = Facture::count();
        $produit = produit::count();
        //$client =client::count();

    	return view('Pages.index', compact('user', 'commande', 'facture', 'produit', 'top_produit'))
        ->with('name', json_encode($array));
    }

    public function users()
    {

    	$all_clt =User::all();

    	return view('Pages.users',['Users'=>$all_clt]);
    }

    public function maps()
    {
    	return view('Pages.maps');
    }

}
