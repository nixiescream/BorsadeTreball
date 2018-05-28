<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Login</title>
        <link href="<?php echo e(secure_asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(secure_asset('css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="<?php echo e(secure_asset('vendor/simple-line-icons.min.css')); ?>" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <link href="<?php echo e(secure_asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(secure_asset('css/login.css')); ?>" rel="stylesheet">
    </head>
    <body class="app flex-row align-items-center">
        <?php echo $__env->yieldContent('content'); ?>
        <script src="<?php echo e(secure_asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="<?php echo e(secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('vendor/scrollreveal/scrollreveal.min.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
        <!--<script src="<?php echo e(secure_asset('javascript/creative.min.js')); ?>"></script>-->
        <script src="<?php echo e(secure_asset('vendor/popper.min.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('vendor/pace.min.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('vendor/Chart.min.js')); ?>"></script>

        <script src="<?php echo e(secure_asset('javascript/editable.js')); ?>"></script>
        <!--<script src="<?php echo e(secure_asset('javascript/app.js')); ?>"></script>-->
    </body>
</html>
