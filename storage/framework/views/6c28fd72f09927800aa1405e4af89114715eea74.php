<!-- Barra Superior -->
<?php $__env->startSection('header'); ?>
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="<?php echo e(url('/empresa', $empresa->user_id)); ?>">Empresa</a></li>
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
                <a class="dropdown-item" href="<?php echo e(url('/empresa', $empresa->user_id)); ?>"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> Missatges<span class="badge badge-primary">42</span></a>
                <a class="dropdown-item" href="<?php echo e(url('/empresa/editarEmpresa',$empresa->user_id)); ?>"><i class="fa fa-wrench"></i> Configuració</a>
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
            <a class="nav-link" href="<?php echo e(url('/empresa', $empresa->user_id)); ?>"><i class="icon-speedometer"></i> Panell d'usuari <span class="badge badge-primary">NEW</span></a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/empresa/editarEmpresa',$empresa->user_id)); ?>" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>

          <li class="nav-title">
            Les meves ofertes
          </li>
          <li class="nav-item">
            <a <?php if($empresa->empresa_validat == 1): ?>
                href="<?php echo e(url('/empresa/crearOferta', $empresa->user_id)); ?>"
                class="nav-link"
            <?php endif; ?>
            <?php if($empresa->empresa_validat == 0): ?>
                class="nav-link disabled"
            <?php endif; ?>
            ><i class="icon-graph"></i> Crear oferta </a>
          </li>

          <li class="nav-title">
            Ofertes
          </li>
          <li class="nav-item">
            <a <?php if($empresa->empresa_validat == 1): ?>
                href="<?php echo e(url('/empresa/llistarOfertes', $empresa->user_id)); ?>"
                class="nav-link"
            <?php endif; ?>
            <?php if($empresa->empresa_validat == 0): ?>
                class="nav-link disabled"
            <?php endif; ?>
            ><i class="icon-list"></i> Llistat d'ofertes</a>
          </li>
        </ul>
      </nav>
    </div>
<?php $__env->stopSection(); ?>

<!-- Contingut central -->
<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(url('/empresa')); ?>">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" value="<?php echo e($empresa->user_id); ?>" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Empresa
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($empresa->empresa_nom); ?></h5>
        </div>
    </div>
</div>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Informació
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo e($empresa->empresa_nom); ?></li>
                        <li class="list-group-item"><?php echo e($empresa->empresa_addr); ?></li>
                        <li class="list-group-item"><?php echo e($empresa->empresa_telefon); ?></li>
                        <li class="list-group-item"><?php echo e($empresa->empresa_email); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Ofertes creades
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Oferta</th>
                          <th scope="col">Descripció</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php $__currentLoopData = $ofertes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oferta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($empresa->user_id == $oferta->empresa_id): ?>
                        <tr>
                          <th scope="row"><?php echo e($oferta->id); ?></th>
                          <td><?php echo e($oferta->titol); ?></td>
                          <td><?php echo e($oferta->descripcio); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Ofertes en curs
                </div>
                <div class="card-body">
                    <!-- CODI RANDOM -->
                </div>
            </div>
        </div>
   </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<footer class="app-footer">
    <span>Enborsa't &copy;.</span>
    <span class="ml-auto">Powered by <a href="#">Enborsa't</a></span>
  </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>