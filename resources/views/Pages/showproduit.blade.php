     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Utilisateur </h3>
<br>
            
    <div class="container">
    <form method="get" action="{{url('produit')}}">  

    <div class="form-group">
    <label for=""> Titre :</label><label> {{$produit->titre}}</label>
  
    </div>

    <div class="form-group">
    <label for=""> Description :</label><label> {{$produit->description}}</label>
  
    </div>

    <div class="form-group">
    <label for="">  Quantite:</label><label>{{$produit->quantite}}</label>
   
    </div>

     <div class="form-group">
    <label for="">  Prix :</label><label>{{$produit->prix}}</label> 
  
    </div>

     <div class="form-group">
    <label for="">  Categorie:</label> <label> {{$produit->id_cat}} </label>
  
    </div>




    <div class="form-group">
        <div align="center">
  
  <input type="submit" class="btn btn-primary btn-rounded m-b-10 m-l-5"  value="Retour">


    </div>
</div>
</form> 
</div>




            @endsection