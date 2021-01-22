<?php $__env->startSection('title'); ?>
<title>Sign In | BLOG</title>
<?php $__env->startSection('content'); ?>
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
<!--                 <div class="brand">
                    <img src="<?php echo e(asset('assets/img/logo/logo.png')); ?>" alt="logo">
                </div> -->
                <div class="card fat mt-5">
                    <div class="card-body">
                        <h4 class="card-title text-center">Sign In</h4>
                        <hr>
                        <form method="POST" class="my-login-validation row" novalidate="" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-md-12">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password">Password
                                    <a href="<?php echo e(route('password.request')); ?>" class="float-right">
                                        Forgot Password?
                                    </a>
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                    <label for="remember" class="custom-control-label" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>Remember Me</label>
                                </div>
                            </div>

                            <div class="form-group m-0 col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2020 &mdash; Blog
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/auth/login.blade.php ENDPATH**/ ?>