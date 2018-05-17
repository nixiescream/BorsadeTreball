<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Registra't</h1>
                    <p class="text-muted">Crea el teu compte</p>
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="card">
                                <div class="card-body">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" class="message_pri" type="radio" onchange="prueba()" name="rol" id="rol1" value="alumne">
                                        <label class="form-check-label" for="rol1">Alumne</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" class="message_pri" type="radio" onchange="prueba()" name="rol" id="rol2" value="empresa">
                                        <label class="form-check-label" for="rol2">Empresa</label>
                                    </div>
                                    <div class="input-group mb-3 <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nom d'usuari" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="input-group mb-3 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <script id="blockOfStuff" type="text/html">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-pencil"></i></span>
                                        </div>
                                        <select name="estudis" class="custom-select form-control">
                                            <?php $__currentLoopData = $estudis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($estudi->sigles); ?>"><?php echo e($estudi->nom); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </script>
                                    <script>
                                    /*$('.message_pri').change(function(){
                                        console.log("asada")
                                        if($(this).val() == 'alumne'){
                                            var div = document.createElement('div');
                                            div.innerHTML = $('#blockOfStuff').innerHTML;
                                            document.getElementById('selection').appendChild(div);
                                        }
                                    });*/
                                    function radioSeleccionado(name){
                                      var elements=document.getElementsByName(name)
                                      for(x=0;x<elements.length;x++){
                                          if(elements[x].checked)
                                             return elements[x].value
                                          }
                                    }
                                    function prueba(){
                                        rol = radioSeleccionado('rol');
                                        if(rol == 'alumne'){
                                            var div = document.createElement('div');
                                            div.setAttribute('class', 'input-group-prepend');
                                            div.setAttribute('id', 'divRaro');
                                            div.innerHTML = document.querySelector('#blockOfStuff').innerHTML;
                                            document.querySelector('#selection').appendChild(div);
                                        } else if(rol == 'empresa'){
                                            var div = document.querySelector('#divRaro');
                                            document.querySelector('#selection').removeChild(divRaro);
                                        }
                                    }
                                    </script>
                                    <div class="input-group mb-3" id="selection"></div>
                                    <div class="input-group mb-3 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Contrasenya" name="password" required>
                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Repeteix la contrasenya" name="password_confirmation" required>
                                    </div>
                                <button type="submit" value="register" class="btn btn-block btn-success">Crear compte</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>