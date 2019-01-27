     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Utilisateur </h3>
<br>
            
    <div class="container">

    <form method="post" class="needs-validation" novalidate action="{{url('adduser')}}">  
    {{ csrf_field() }}
    <div class="form-group">
    <label for="name"> Description :</label>
    <input type="text" class="form-control" name="description" id="name" required>
    <div class="valid-feedback">
        Cela semble bon!
      </div>

    </div>

    <div class="form-group">
    <label for="date_tache"> Date Tache  :</label>
    <input type="email" class="form-control" name="date_tache" id="date_tache" required>
    <div class="valid-feedback">
        Cela semble bon!

      </div>
    
    </div>

    <div class="form-group">
    <label for="pass"> Projet :</label>
    <input type="password" class="form-control" name="id_projet" id="pass" required>
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