     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Utilisateur </h3>
<br>
            
    <div class="container">
    <form method="post" action="{{url('addproduit')}}" class="needs-validation" novalidate>  
    {{ csrf_field() }}
    <div class="form-group">
    <label for=""> Titre :</label>
    <input type="text" class="form-control" name="titre" value="{{$produit->titre}}" required>
      <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Description :</label>
    <input type="text" class="form-control" name="description" value="{{$produit->description}}" required>
      <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for="">  Quantite:</label>
    <input type="number" class="form-control" name="quantite" value="{{$produit->quantite}}" required>
      <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

     <div class="form-group">
    <label for="">  Prix :</label>
    <input type="number" class="form-control" name="prix" value="{{$produit->prix}}" required>
      <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

     <div class="form-group">
    <label for="">  Categorie:</label>
    <input type="text" class="form-control" name="id_cat" value="{{$produit->id_cat}}" required>
      <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

     <div class="form-group">
    <label for="">  Image :</label>
    <input type="file" class="form-control" name="imagePath" value="{{$produit->imagePath}}" required>
      <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>


    <div class="form-group">
        <div align="center">
   <input type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5"  value="Modifier">

    </div>
</div>
</form> 
</div>




            @endsection