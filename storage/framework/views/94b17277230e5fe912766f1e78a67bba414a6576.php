<!DOCTYPE html>
<html>

<head>
    <title>:: Connexion ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>" />
    <!-- Bootstrap -->
    <!-- global css -->
    <link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iCheck/css/all.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <link href="<?php echo e(asset('assets/css/login2.css')); ?>" rel="stylesheet">
    <!--end page level css-->
</head>

<body class="bg-slider">
<div class="preloader">
    <div class="loader_img"><img src="<?php echo e(asset('assets/img/loader.gif')); ?>" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-center">
                            Login
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-md-8 core-login">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Adresse email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                                <input type="checkbox" name="remember" id="remember"> &nbsp;
                            <label for="remember"> Se souvenir de moi ? </label>
                            <a href="<?php echo e(route('password.request')); ?>" id="forgot" class="text-primary forgot1  pull-right"> Mot de passe oublié ? </a>
                        </div>
                        <div class="form-group ">
                            <button type="submit"  class="btn btn-primary login-btn">Login</button>
                            <br>
                            <hr>
                            <span> Pas de compte ?<a href="<?php echo e(route('register')); ?>"> Enregistrement</a></span>
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
<script src="<?php echo e(asset('assets/js/backstretch.js')); ?>"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/iCheck/js/icheck.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom_js/login.js')); ?>"></script>
<!-- end of page level js -->
</body>

</html>
