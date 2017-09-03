<!DOCTYPE html>
<html>

<head>
    <title>:: Mot de passe oublié ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- Bootstrap -->
    <!-- global level css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{asset('assets/vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/forgot_password.css')}}" rel="stylesheet">
    <!-- end of page level styles-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 box animated fadeInUp">
            <h3 class="text-center"> Mot de passe oublié
            </h3>
            <p class="text-center enter_email">
                <small>Entrez votre adresse email</small>
            </p>
            <p class="text-center check_email hidden">
                <small>Un email vous a été envoyé pour un reset</small>
            </p>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                    <input type="email" class="form-control email" name="email" id="email" placeholder="Email">
                </div>
                <button type="submit" value="Reset Your Password" class="btn btn-primary btn-block submit-btn">Reset
                    de votre mot de passe
                </button>
            </form>
            <div>
                <h4 class="text-primary signup-signin">
                    <a href="{{ route('login') }}">Connexion</a>
                    <a href="{{ route('register') }}" class="pull-right">Enregistrement</a>
                </h4>
            </div>
        </div>
    </div>
</div>

<!-- page level js -->
<script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('assets/js/custom_js/forgot_password.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
