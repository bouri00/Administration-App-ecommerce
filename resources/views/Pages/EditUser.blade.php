     @extends('MasterPage/master')
        @section('content')

<h3> Ajouter Nouveau Utilisateur </h3>
<br>
            
    <div class="container">
    <form method="post" action="{{url('adduser/'.$uses->id)}}" class="needs-validation" novalidate>  

    <input type="hidden" name="_methode" value="PUT">
    
    {{ csrf_field() }}
    <div class="form-group">
    <label for=""> Nom et Prénom :</label>
    <input type="text" class="form-control" name="name" value="{{$uses->name}}" required>
       <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Email :</label>
    <input type="email" class="form-control" name="email" value="{{$uses->email}}" required >
       <div class="valid-feedback">
        Cela semble bon!
      </div>
    </div>

    <div class="form-group">
    <label for=""> Password :</label>
    <input type="password" class="form-control" name="password" value="{{$uses->password}}" required>
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