<?php $__env->startSection('title', 'Verify Email'); ?>
<?php echo $__env->make('theme.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('Verify Email', 'Sign Up'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- end head -->
<!-- body start-->
<body>
<!-- top-nav bar start-->
<section id="nav-bar" class="nav-bar-main-block nav-bar-main-block-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                <div class="logo text-center btm-10">
                    <?php
                        $logo = App\Setting::first();
                    ?>

                    <?php if($logo->logo_type == 'L'): ?>
                        <a href="<?php echo e(url('/')); ?>" title="logo"><img src="<?php echo e(asset('images/logo/'.$logo->logo)); ?>" class="img-fluid" alt="logo"></a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>"><b><div class="logotext"><?php echo e($logo->project_title); ?></div></b></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="Login-btn txt-rgt">
                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-secondary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       
                        <?php echo e(__('Logout')); ?>

                        
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="display-none">
                            <?php echo csrf_field(); ?>
                        </form>
                       
                    </a>
                </div> 
            </div>
        </div>
    </div>
</section>

<!-- top-nav bar end-->
<section id="signup" class="signup-block-main-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Verify Your Email Address')); ?></div>

                    <div class="card-body">
                        <?php if(session('resent')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

                        <?php echo e(__('If you did not receive the email')); ?>, <a href="<?php echo e(route('verification.resend')); ?>"><?php echo e(__('click here to request another')); ?></a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('theme.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end jquery -->
</body>
<!-- body end -->
</html> <?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/auth/verify.blade.php ENDPATH**/ ?>