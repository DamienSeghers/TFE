

<!DOCTYPE html>
<html>

<head>
    <title>Lockscreen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>"/>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- styles -->
    <!--page level css -->
    <link href="<?php echo e(asset('assets/css/lockscreen.css')); ?>" rel="stylesheet">
    <!--end page level css-->
</head>
<body>
<div class="preloader">
    <div class="loader_img"><img src="<?php echo e(asset('assets/img/loader.gif')); ?>" alt="loading..." height="64" width="64"></div>
</div>
<div class="top">
    <div class="colors"></div>
</div>
<div class="container">
    <div class="lockscreen-container">
        <div id="output"></div>
        <div><img class="avatar" src="uploads/avatars/<?php echo e(Auth::user()->avatar); ?>"></div>
        <div class="form-box">
            <form role="form" method="POST" action="<?php echo e(route('lockscreen')); ?>">
            <?php echo e(csrf_field()); ?>

                <div class="form">
                    <p class="form-control-static"><?php echo e(Auth::user()->name); ?></p>
                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                    <button class="btn btn-info btn-block login" id="index" type="submit">GO</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- global js -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<!-- end of global js -->
<!-- page css -->
<script src="<?php echo e(asset('assets/js/lockscreen.js')); ?>"></script>
<!-- end of page css -->
</body>

</html>
