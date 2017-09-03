<!DOCTYPE html>
<html>

<head>
    <title>::Admin Forgot Password::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>"/>
    <!-- Bootstrap -->
    <!-- global level css -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(('assets/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="<?php echo e(asset('assets/vendors/iCheck/css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/forgot_password.css')); ?>" rel="stylesheet">
    <!-- end of page level styles-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="<?php echo e(asset('assets/img/loader.gif')); ?>" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 box animated fadeInUp">
            <h3 class="text-center">Forgot Password
            </h3>
            <p class="text-center enter_email">
                <small>Enter your Registered email</small>
            </p>
            <p class="text-center check_email hidden">
                <small>Check your email for Reset link</small>
            </p>
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                    <input type="email" class="form-control email" name="email" id="email" placeholder="Email">
                </div>
                <button type="submit" value="Reset Your Password" class="btn btn-primary btn-block submit-btn">Reset
                    Your Password
                </button>
            </form>
            <div>
                <h4 class="text-primary signup-signin">
                    <a href="<?php echo e(route('login')); ?>">Log In</a>
                    <a href="<?php echo e(route('register')); ?>" class="pull-right">Sign Up</a>
                </h4>
            </div>
        </div>
    </div>
</div>

<!-- page level js -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/iCheck/js/icheck.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom_js/forgot_password.js')); ?>" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
