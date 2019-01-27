<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Facture;
use App\produit;
use App\Commande;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('home', compact('user', 'commande', 'facture', 'produit'))->with('name', json_encode($array));
        
    }

}
