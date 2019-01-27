<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
    <!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/22.png')}}">
<title>Admin BigE-co</title>
<!-- Bootstrap Core CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="{{ asset('css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom CSS --> <link href="{{ asset('css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
<link href="{{ asset('css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
<link href="{{ asset('css/helper.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('MDB Bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('MDB Bootstrap/css/mdb.min.css')}}" rel="stylesheet">
<link href="{{ asset('MDB Bootstrap/css/style.css')}}" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('index')}}">
                        <!-- Logo icon 
                       <b><img src="{{ asset('images/logo.png')}}" alt="homepage" class="dark-logo" /></b>
                       <span><img src="{{ asset('images/logo-text.png')}}" alt="homepage" class="dark-logo" /></span>-->

                 <img src="{{ asset('images/22.png')}}" width="100px" height="50px" alt="homepage" class="dark-logo" />

                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    
                    </ul>
                   
                    <ul class="navbar-nav my-lg-0">
                                   
                                </ul>
                            </div>
                        </li>


                        @if (Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                       
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                           

                 <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                              <img src="{{ asset('images/users/5.jpg')}}" class="img-circle" width="45" height="45" alt="user">
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out"></i> Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                     
                    </ul>
                      @endif
                


                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Accueil</li>
                        <li> <a class="has-arrow  " href="{{url('index')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li> <a class="has-arrow  " href="{{url('index')}}" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="{{url('users')}}" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Utilisateur </span></a>
                        </li>
                        <li> <a class="has-arrow  " href="{{url('produit')}}" aria-expanded="false"><i class="fas fa-shopping-bag"></i><span class="hide-menu">Produit</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="{{url('commande')}}" aria-expanded="false"><i class="fas fa-cart-plus"></i><span class="hide-menu">Commande</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="{{url('facture')}}" aria-expanded="false"><i class="far fa-credit-card"></i><span class="hide-menu">Facture</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="{{url('client')}}" aria-expanded="false"><i class="fas fa-users-cog"></i><span class="hide-menu">Client</span></a>
                        </li>
                      <!--  
                        <span class="label label-rouded label-warning pull-right">6</span>
                        <span class="label label-rouded label-danger pull-right">6</span>
                        </li>-->
                    </ul>
                </nav>
            </div>
        </div>
            <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                  <a href="{{url('index')}}"> <h3 class="text-primary">Dashboard</h3></a> 
                     </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            
     
             <!--  Content Page -->

                  @yield('content')

             <!-- // Content Page -->

            <!-- footer -->
            <footer class="footer"> Copyright © 2018 .<a href="#">Big-Eco </a>



            
            développé par <a href="#">MBoury</a></footer>
        
        </div>
      
    </div>
    <!-- All Jquery -->
    <script src="{{ asset('js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{ asset('js/lib/morris-chart/morris.js')}}"></script>
    <script src="{{ asset('js/lib/morris-chart/dashboard1-init.js')}}"></script>
    <script src="{{ asset('js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('js/lib/datatables/datatables-init.js')}}"></script>
    <script src="{{ asset('js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{ asset('js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('js/lib/vector-map/vector.init.js')}}"></script>

    <!-- mdbootstrap-->

    <script type="text/javascript" src="{{ asset('MDB Bootstrap/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('MDB Bootstrap/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('MDB Bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('MDB Bootstrap/js/mdb.min.js')}}"></script>

    <!-- mdbootstrap-->
<script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>