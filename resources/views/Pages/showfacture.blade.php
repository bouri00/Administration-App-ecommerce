     @extends('MasterPage/master')
        @section('content')

<h3> Détail Facture </h3>
<br>
            
    <div class="container">
    <form method="get" action="{{url('facture')}}" class="needs-validation" novalidate>  
  
    <div class="form-group">
    <label for=""> Libelle :</label>
   <label>{{$facture->description}}</label>
    </div>

    <div class="form-group">
    <label for=""> Produit :</label>
  <label>{{$facture->idprod}}</label>
    </div>

    <div class="form-group">
    <label for=""> Client :</label>
   <label>{{$facture->idpcllient}}</label>
    </div>
      <div class="form-group">
    <label for=""> Commande :</label>
 <label>{{$facture->idpcom}}</label>
    </div>

       <div class="form-group">
    <label for=""> Date Livraison :</label>
  <label>{{$facture->datelivraison}}</label>
    </div>


    <div class="form-group">
        <div align="center">
 
  <input type="submit" class="btn btn-primary btn-rounded m-b-10 m-l-5"  value="Retour">

    </div>
</div>
</form> 
</div>




            @endsection