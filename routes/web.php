<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');


Route::get('index','AcueilController@index');

/*
Route::group(['middleware' => ['web']], function() {
    Route::resource('User','UserController');
    Route::POST('addUser','UserController@addUser');
  });
*/
/*
  Route::group(['middleware' => ['web']], function() {
    Route::resource('user','UserController');
    Route::POST('addUser','UserController@addUser');
    Route::POST('editUser','UserController@editUser');
    Route::POST('deleteUser','UserController@deleteUser');
  });*/

  Route::get('maps','AcueilController@maps');

  /* Liste Utilisateur  */

  Route::get('users','AcueilController@users');
  Route::get('adduser','UserController@adduser');
  Route::post('adduser','UserController@store');
  Route::get('adduser/{id}/edit','UserController@edit');
  Route::get('show/{id}','UserController@show');
  Route::post('adduser/{id}','UserController@update');
  Route::post('deleteuser/{id}','UserController@destroy');
   /* Liste Utilisateur  */

     /* Liste Produit  */
  Route::get('produit','ProduitController@index');
  Route::get('addproduit','ProduitController@addproduit');
  Route::post('addproduit','ProduitController@store');
  Route::get('addproduit/{id}/edit','ProduitController@edit');

  Route::get('show/{id}','ProduitController@show');

  Route::post('addproduit/{id}','ProduitController@update');
  Route::post('deleteproduit/{id}','ProduitController@destroy');
   /* Liste Utilisateur  */

        /* Liste Commande  */
  Route::get('commande','CommandeController@index');
  Route::get('addcommande','CommandeController@addcommande');
  Route::post('addcommande','CommandeController@store');
  Route::get('addcommande/{id}/edit','CommandeController@edit');

  Route::get('show/{id}','CommandeController@show');
  Route::post('addcommande/{id}','CommandeController@update');
  Route::post('deletecommande/{id}','CommandeController@destroy');
   /* Liste Utilisateur  */

    /* Liste Facture  */

  Route::get('facture','FactureController@index');
  Route::get('addfacture','FactureController@addfacture');
  Route::post('addfacture','FactureController@store');
  Route::get('addfacture/{id}/edit','FactureController@edit');
  Route::get('show/{id}','FactureController@show');
  Route::post('addfacture/{id}','FactureController@update');
  Route::post('deletefacture/{id}','FactureController@destroy');
   /* Liste Facture  */

        /* Liste Client  */

  Route::get('client','ClientController@index');
  Route::get('addclient','ClientController@addclient');
  Route::post('addclient','ClientController@store');
  Route::get('addclient/{id}/edit','ClientController@edit');
  Route::get('show/{id}','ClientController@show');
  Route::post('addclient/{id}','ClientController@update');
  Route::post('deleteclient/{id}','ClientController@destroy');
   /* Liste Client  */





  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

