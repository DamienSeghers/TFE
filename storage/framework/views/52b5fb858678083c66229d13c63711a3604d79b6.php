<!DOCTYPE html>
<html>

<head>
    <title>:: Enregistrement ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>" />
    <!-- global css -->
    <link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iCheck/css/all.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <link href="<?php echo e(asset('assets/css/register2.css')); ?>" rel="stylesheet">
    <!--end of page level css-->
</head>

<body class="bg-slider">
<div class="preloader">
    <div class="loader_img"><img src="<?php echo e(asset('assets/img/loader.gif')); ?>" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">

        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 register-content">
            <div class="row">
               <div class="col-md-12">
                   <div class="header">
                       <h2 class="text-center">
                            Enregistrement
                       </h2>
                   </div>
               </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-md-8 core-register">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="name">Nom d'utilisateur</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Nom d'utilisateur"
                                               name="name" id="name" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label class="control-label" for="email">EMAIL</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Adresse email" class="form-control" name="email"
                                               id="email" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row password">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label class="control-label" for="password">Mot de passe</label>
                                    <div class="input-group">
                                        <input type="password" placeholder="Mot de passe" class="form-control"
                                               name="password" id="password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group cp-group">
                                    <label class="control-label confirm_pwd" for="password_confirm">Confirmation</label>
                                    <div class="input-group pull-right">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="checkbox-inline sr-only" for="terms">Agree to terms and conditions</label>
                                <input type="checkbox" value="1" name="terms" id="terms" required/>&nbsp;
                                <label for="terms"> Etes-vous d'accord avec les <a href="https://www.miraclesarebrewing.com/wp-content/uploads/2013/04/keep-calm-and-just-say-yes-5.png"> conditions d'utilisation</a>?</label>
                        </div>
                        <div class="form-group ">
                                <button type="submit" class="btn btn-primary" >Enregistrement</button>
                                <input type="reset" class="btn btn-default" value="Reset" id="dee1"/><br>
                                <hr>
                                <span>Vous avez déjà un compte ? <a href="<?php echo e(route('login')); ?>">Login</a></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="social-buttons">
                        <p class="text-center">
                            <label>Damien Seghers</label>
                        </p>
                        <p class="text-center">
                            <label>3TL2</label>
                        </p>
                        <p class="text-center">
                            <label>TFE 2016-2017</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- global js -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="<?php echo e(asset('assets/vendors/iCheck/js/icheck.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/backstretch.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom_js/register.js')); ?>"></script>
<!-- end of page level js -->
</body>

</html>
