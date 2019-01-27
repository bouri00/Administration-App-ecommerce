     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Commande </h3>
<br>
            
    <div class="container">
    <form method="post" action="{{url('addcommande')}}" class="needs-validation" novalidate>  
    {{ csrf_field() }}
    <div class="form-group">
    <label for=""> Quantite :</label>
    <input type="number" class="form-control" name="quantite_com" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Date Commande :</label>
    <input type="date" class="form-control" name="date_com" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>


    <div class="form-group">
    <label for=""> Quantite :</label>
    <input type="text" class="form-control" name="quantite" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Produit :</label>
    <input type="text" class="form-control" name="prod" required>
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