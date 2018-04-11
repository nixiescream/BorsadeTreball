<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="<?php echo e(asset('vendor/simple-line-icons.min.css')); ?>" rel="stylesheet">

        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
    </head>
    <body class="app flex-row align-items-center">
        <?php echo $__env->yieldContent('content'); ?>
        <script src="<?php echo e(asset('vendor/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/pace.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('javascript/app.js')); ?>"></script>
    </body>
</html>
