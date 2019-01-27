     @extends('MasterPage/master')
        @section('content')

<h3> Les information du Utilisateur </h3>
<br>
            
    <div class="container">
    <form method="get" action="{{url('users')}}">  

    
    {{ csrf_field() }}
    <div class="form-group">
    <label for=""> Nom et Prénom :   </label>  <label> {{$shows->name}} </label>
    
      </div>
   
    <div class="form-group">
    <label for=""> Email :</label>  <label>  {{$shows->email}}  </label>
   
    </div>

    <div class="form-group">
    <label for=""> Password :</label> <label>   {{ $shows->password }}  </label>

    </div>

    <div class="form-group">
        <div align="center">
 
 <input type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5"  value="Retour">

    </div>
</div>
</form> 
</div>




            @endsection