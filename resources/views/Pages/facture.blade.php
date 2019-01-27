        @extends('MasterPage/master')
        @section('content')
          
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="h1-responsive font-weight-bold text-center my-5" id="sec">Liste Facture</h4>
      
                                <h4 class="card-title">
                                  <a href="{{url('addfacture')}}">
                                <button type="button" class="btn btn-success btn-rounded m-b-10 m-l-5">Ajouter</button>
                              </a>
                                </h4>

                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Libelle</th>
                                                <th>Produit</th>
                                                <th>Client</th>
                                                <th>Commande</th>
                                                <th>Date Livraison
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>

                                        <tbody>
                                  @foreach($facture as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->description}}</td>
                                                <td>{{$value->idprod}}</td>
                                                <td>{{$value->idpclient}}</td>
                                                <td>{{$value->idpcom}}</td> 
                                                <td>{{$value->datelivraison}}</td>
                            
                <td>
          
              
            <form action="{{url('deletefacture/'.$value->id)}}" method="post">
                <a href="{{url('show/'.$value->id)}}" class="show-modal btn btn-info btn-rounded m-b-10 m-l-5" data-id="{{$value->id}}" > 
                  Afficher 
            </a>
               
            <a href="{{url('addfacture/'.$value->id.'/edit')}}" class="edit-modal btn btn-warning btn-rounded m-b-10 m-l-5">Modifier
            </a>

                {{ csrf_field() }}
               {{ csrf_field('DELETE') }}

          <button type="submit" name="" class="edit-modal btn btn-danger btn-rounded m-b-10 m-l-5">Supprimer</button>

         </form>
             </td>            
             </tr>
                                    @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
               

             </div>


            @endsection

