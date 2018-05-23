

<?php $__env->startSection('content'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                <a class="btn btn-secondary" href="<?php echo e(url('/')); ?>">Home</a>
                    <div class="card-body">
                        <h1>Inicia Sessió</h1>
                        <p class="text-muted">Benvingut!</p>
                        <form action="<?php echo e(url('login')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required autofocus>
                            </div>
                            <div>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Recorda'm
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" value="login" class="btn btn-primary px-4">Login</button>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdDBloUAAAAAEcywmeKb64fumvSCk-Uvz5RmfN9"></div>
                                <div class="col-3 text-right">
                                    <a class="btn btn-secondary px-2" href="<?php echo e(url('password.request')); ?>">Has oblidat la teva contrasenya?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Registra't</h2>
                            <p>Registra't a la nostra plataforma</p>
                            <button type="button" class="btn btn-primary active mt-3" onclick="window.location='<?php echo e(url('register')); ?>'" id="linkRegister">Registra't ara!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>