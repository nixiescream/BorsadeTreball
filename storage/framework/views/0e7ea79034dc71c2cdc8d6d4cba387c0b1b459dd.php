<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Dashboard</title>

  <script src="<?php echo e(asset('javascript/estudis.js')); ?>"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/simple-line-icons.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/edit.css')); ?>" rel="stylesheet">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <?php echo $__env->yieldContent('header'); ?>

  <div class="app-body">

    <?php echo $__env->yieldContent('sidebar'); ?>

    <main class="main">

     <?php echo $__env->yieldContent('breadcrumb'); ?>

      <div class="container-fluid">
        <div>
        <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    </main>

   <?php echo $__env->yieldContent('aside'); ?>

  </div>

  <?php echo $__env->yieldContent('footer'); ?>

  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <!--<script src="<?php echo e(asset('vendor/jquery.min.js')); ?>"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!--<script type="text/javascript" src="<?php echo e(asset('javascript/app.js')); ?>"></script>-->
  <script src="<?php echo e(asset('vendor/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/pace.min.js')); ?>"></script>

  <script src="<?php echo e(asset('vendor/Chart.min.js')); ?>"></script>
  <!--<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>-->
  <!--<script src="<?php echo e(asset('js/app.js')); ?>"></script>-->


</body>
</html>
