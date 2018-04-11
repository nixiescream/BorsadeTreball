<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Register</h1>
                    <p class="text-muted">Create your account</p>
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="card">
                                <div class="card-body">
                                    <div class="input-group mb-3 <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
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
                                    <div class="input-group mb-3 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
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
                                        <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rol" id="rol1" value="alumne">
                                        <label class="form-check-label" for="rol1">Alumne</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rol" id="rol2" value="empresa">
                                        <label class="form-check-label" for="rol2">Empresa</label>
                                    </div>
                                <button type="submit" value="register" class="btn btn-block btn-success">Create Account</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>