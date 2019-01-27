<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class UserController extends Controller
{
    public function index(){
        $user = User::paginate(4);
        return view('Pages.users',compact('user'));
      }
  public function adduser(){
       
        return view('Pages.addusers');
      }
  
     
        //Enregistrer une User
    public function store(Request $request)
    {
        $usr= new User();
        $usr->name = $request->input('name');   
        $usr->email=$request->input('email');
        $usr->password=$request->input('password');
        $usr->save();
        return redirect('users');
      
    }

    //Recuperer les donnees d'une users dans un formuler 
    public function edit($id)
    {
        $uses = User::find($id);
        return view('Pages.EditUser',['uses'=>$uses]);

    }
    //Permet de modifier les donnees d'une produit
    public function update($id, Request $request){
        $usr = User::find($id);
        $usr->name = $request->input('name');   
        $usr->email=$request->input('email');
        $usr->password=$request->input('password');
        $usr->save();
        return redirect('/users');
        
    }

      public function destroy($id)
    {
        $us = User::find($id);
        
        $us->delete();

        return redirect('/users');
    }

    public function show($id)
    {
        $affiche=User::find($id);
        return view('Pages.showuser',['shows'=>$affiche]);
    }

}
