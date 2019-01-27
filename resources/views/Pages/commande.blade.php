        @extends('MasterPage/master')
        @section('content')
          
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <h4 class="h1-responsive font-weight-bold text-center my-5" id="sec">Administration du  Commande</h4>
      
                                <h4 class="card-title">
                                  <a href="{{url('addcommande')}}">
                                <button type="button" class="btn btn-success btn-rounded m-b-10 m-l-5">Ajouter</button>
                              </a>
                                </h4>

                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Quantite</th>
                                                <th>Date Commande</th>
                                                <th>Produit</th>
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>

                                        <tbody>
                                  @foreach($commande as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->quantite_com}}</td>
                                                <td>{{$value->date_com}}</td>
                                                <td>{{$value->prod}}</td>
                            
                <td>
          
              
            <form action="{{url('deletecommande/'.$value->id)}}" method="post">
                <a href="{{url('show/'.$value->id)}}" class="show-modal btn btn-info btn-rounded m-b-10 m-l-5" data-id="{{$value->id}}" > 
                  Afficher 
            </a>
               
            <a href="{{url('addcommande/'.$value->id.'/edit')}}" class="edit-modal btn btn-warning btn-rounded m-b-10 m-l-5">Modifier
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

