     @extends('MasterPage/master')
        @section('content')

<h3> Détail Commande </h3>
<br>
            
    <div class="container">
    <form method="get" action="{{url('commande')}}">  

    <div class="form-group">
    <label for=""> Quantite :</label>
   <label> {{$commande->quantite_com}} </label>
   
    </div>

    <div class="form-group">
    <label for=""> Date Commande :</label>
    <label> {{$commande->date_com}} </label>
    
    </div>


    <div class="form-group">
    <label for=""> Quantite :</label>
    <label>{{$commande->quantite}} </label>
    
    </div>

    <div class="form-group">
    <label for=""> Produit :</label>
     <label>{{$commande->prod}}</label>
  
    </div>


    <div class="form-group">
        <div align="center">
<input type="submit" class="btn btn-primary btn-rounded m-b-10 m-l-5"  value="Retour">

    </div>
</div>
</form> 
</div>




            @endsection