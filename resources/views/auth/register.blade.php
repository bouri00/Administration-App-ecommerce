
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inscription</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="MDB Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="MDB Bootstrap/css/mdb.min.css" rel="stylesheet">
  <link href="MDB Bootstrap/css/style.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="MDB Bootstrap/images/u.png"/>
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>

<body>

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Cree Nouveau Compte</h1>

            <hr class="hr-light">

            <p>
              <strong>Authentifier Pour accés a mon Espace</strong>
            </p>
           
          </div>
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
               <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                   @csrf
                   
                  <h3 class="dark-grey-text text-center">
                    <strong>Inscription</strong>
                  </h3>
                  <hr>
                     <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form3"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    <label for="form3">Name  :</label>
                     @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                     @endif
                  </div>


                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="email" id="form3" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="form3">Email  :</label>
                     @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif
                  </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="form2" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="form2">Password :</label>
                     @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                  </div>


                  <div class="md-form">
                  <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="form2" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                    <label for="form2">Confirme Password :</label>

                </div>


                  <div class="text-center">
                   <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
       {{ __('Register') }}
        <i class="fa fa-sign-in ml-1"></i></button>

</div>
    </form>
  
</div>
</div>
</div></div>
</div></div></div>

  
    

  <script type="text/javascript" src="MDB Bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="MDB Bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="MDB Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="MDB Bootstrap/js/mdb.min.js"></script>
  <script type="text/javascript">
    new WOW().init();
  </script>
</body>

</html>