<!-- Barra Superior -->
<?php $__env->startSection('header'); ?>
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Usuari</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user"></i><span class="badge badge-pill badge-danger" alt="<?php echo e(Auth::user()->email); ?>">5</span></a>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Compte</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> Missatges<span class="badge badge-primary">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Configuració</a>
                <div class="divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Desconnecta</a><form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                         <?php echo e(csrf_field()); ?>

                     </form>
            </div>
        </li>
    </ul>
  </header>
<?php $__env->stopSection(); ?>

<!-- Barra lateral -->

<?php $__env->startSection('sidebar'); ?>
<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/alumne', $alumne->user_id)); ?>"><i class="icon-speedometer"></i> Panell d'usuari <span class="badge badge-primary">NEW</span></a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/alumne/editarAlumne',$alumne->user_id)); ?>" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-settings"></i> Configuració</a>
          </li>

          <li class="nav-title">
            Les meves ofertes
          </li>
          <li class="nav-item">
            <a <?php if($alumne->alumne_validat == 1): ?>
                href="<?php echo e(url('/alumne/ofertesAplicades')); ?>"
                class="nav-link"
            <?php endif; ?>
            <?php if($alumne->alumne_validat == 0): ?>
                class="nav-link disabled"
            <?php endif; ?>><i class="icon-graph"></i> Ofertes aplicades </a>
          </li>

          <li class="nav-title">
            Ofertes
          </li>
          <li class="nav-item">
            <a <?php if($alumne->alumne_validat == 1): ?>
                href="<?php echo e(url('/alumne/llistarOfertes')); ?>"
                class="nav-link"
            <?php endif; ?>
            <?php if($alumne->alumne_validat == 0): ?>
                class="nav-link disabled"
            <?php endif; ?>><i class="icon-list"></i> Llistat d'ofertes </a>
          </li>
        </ul>
      </nav>
    </div>
<?php $__env->stopSection(); ?>

<!-- Contingut central -->
<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(url('/alumne')); ?>">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" value="<?php echo e($alumne->user_id); ?>" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Perfil
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($alumne->alumne_nom); ?> <?php echo e($alumne->alumne_cognom1); ?> <?php echo e($alumne->alumne_cognom2); ?></h5>
        </div>
    </div>
</div>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Informació usuari
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo e($alumne->alumne_nom); ?> <?php echo e($alumne->alumne_cognom1); ?> <?php echo e($alumne->alumne_cognom2); ?></li>
                        <li class="list-group-item"><?php echo e($alumne->alumne_telefon); ?></li>
                        <li class="list-group-item"><?php echo e($alumne->alumne_email); ?></li>
                        <li class="list-group-item"><?php echo e($alumne->alumne_estudis); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Idiomes
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Idioma</th>
                                <th scope="col">Nivell</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Català</td>
                                <td>Natiu</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Castellà</td>
                                <td>Natiu</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Anglès</td>
                                <td>B2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Biografia
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo e($alumne->alumne_bio); ?> </li>
                    </ul>
                </div>
            </div>
        </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<footer class="app-footer">
    <span>Enborsa't &copy;.</span>
    <span class="ml-auto"><a href="#">Enborsa't</a></span>
  </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>