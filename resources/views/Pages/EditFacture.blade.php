     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Facture </h3>
<br>
            
    <div class="container">
    <form method="post" action="{{url('addfacture')}}" class="needs-validation" novalidate>  
    {{ csrf_field() }}
    <div class="form-group">
    <label for=""> Libelle :</label>
    <input type="text" class="form-control" name="description" value="{{$facture->description}}" required>
     <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Produit :</label>
    <input type="text" class="form-control" name="idprod" value="{{$facture->idprod}}" required>
     <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Client :</label>
    <input type="text" class="form-control" name="idpclient" value="{{$facture->idpcllient}}" required>
     <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>
      <div class="form-group">
    <label for=""> Commande :</label>
    <input type="text" class="form-control" name="idpcom" value="{{$facture->idpcom}}" required>
     <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

       <div class="form-group">
    <label for=""> Date Livraison :</label>
    <input type="date" class="form-control" name="datelivraison" value="{{$facture->datelivraison}}" required>
     <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>


    <div class="form-group">
        <div align="center">
   <input type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5"  value="Enregistrer">

    </div>
</div>
</form> 
</div>




            @endsection