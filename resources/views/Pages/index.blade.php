@extends('MasterPage/master')
@section('content')

            <div class="container-fluid">
           <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$facture}}</h2>
                                    <p class="m-b-0">Facture</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$commande}}</h2>
                                    <p class="m-b-0">Commande</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$produit}}</h2>
                                    <p class="m-b-0">Produit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                               <div class="media-body media-text-right">
                                    <h2>{{$user}}</h2>
                                    <p class="m-b-0">Utilisateur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Statistique Utilisateur</h4>
                             <!--   <div id="extra-area-chart"></div>-->
                         <div id="pie_chart" style="width:750px; height:450px;">
                               
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body browser">
                                 <h4 class="card-title">Statistique du site</h4>
                                <p class="f-w-600">Produit <span class="pull-right">{{ $produit }}</span></p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Commande<span class="pull-right">{{$commande}}</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">utilisateur<span class="pull-right">{{$user}}</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Facture<span class="pull-right">{{$facture}}</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

							
                            </div>
                        </div>
                    </div>
                </div>
            </div>

       

   





  <script type="text/javascript">
   var analytics = <?php echo $name; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Chart Utilisateur Enregistrer'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>



          @endsection