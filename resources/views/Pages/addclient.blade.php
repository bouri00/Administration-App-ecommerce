     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Facture </h3>
<br>
            
    <div class="container">
    <form method="post" action="{{url('addclient')}}" class="needs-validation" novalidate>  
    {{ csrf_field() }}
    <div class="form-group">
    <label for=""> Nom :</label>
    <input type="text" class="form-control" name="nom" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Prenom :</label>
    <input type="text" class="form-control" name="prenom" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Email :</label>
    <input type="email" class="form-control" name="email" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>
      <div class="form-group">
    <label for=""> Password :</label>
    <input type="password" class="form-control" name="password" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Adresse :</label>
    <input type="text" class="form-control" name="adresse" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Télephone :</label>
    <input type="number" class="form-control" name="tele" required>
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