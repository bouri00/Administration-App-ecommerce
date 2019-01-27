     @extends('MasterPage/master')
        @section('content')

<h3> Affichage du information Client </h3>
<br>
            
    <div class="container">
    <form method="get" action="{{url('client')}}">  

    <div class="form-group">
    <label for=""> Nom :</label>
 <label>{{$client->nom}}</label>
    </div>

    <div class="form-group">
    <label for=""> Prenom :</label>
  <label>{{$client->prenom}}</label>
    </div>

    <div class="form-group">
    <label for=""> Email :</label>
  <label>{{$client->email}}</label>
    </div>
      <div class="form-group">
    <label for=""> Password :</label>
   <label>{{$client->password}}</label>
    </div>

    <div class="form-group">
    <label for=""> Adresse :</label>
  <label>{{$client->adresse}}</label>
    </div>

    <div class="form-group">
    <label for=""> Télephone :</label>
   <label>{{$client->tele}}</label>
    </div>


    <div class="form-group">
        <div align="center">

<input type="submit" class="btn btn-primary btn-rounded m-b-10 m-l-5"  value="Retour">

    </div>
</div>
</form> 
</div>




            @endsection