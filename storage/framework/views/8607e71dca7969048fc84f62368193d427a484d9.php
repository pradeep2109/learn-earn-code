
<?php $__env->startSection('title', '2FA'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-home start -->
<?php
$gets = App\Breadcum::first();
?>
<?php if(isset($gets)): ?> 

<section id="business-home" class="business-home-main-block" >
    <div class="business-img">
        <?php if($gets['img'] !== NULL && $gets['img'] !== ''): ?>
        <img src="<?php echo e(url('/images/breadcum/'.$gets->img)); ?>" class="img-fluid" alt="" />
        <?php else: ?>
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="course"
            class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bredcrumb-dtl">
                        <h1 class=""><?php echo e(__('Two Factor Authentication')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<?php endif; ?>
<!-- profile update start -->
<section id="profile-item" class="profile-item-block factor-page">
    <div class="container-xl">

        <div class="row">
           
            <div class="col-xl-12 col-lg-12">

            	       <p><?php echo e(__('Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.')); ?></p>

                        <?php if($QR_Image == ''): ?>

                         
						<form action="<?php echo e(route('generate2faSecret')); ?>" method="POST">
							<?php echo csrf_field(); ?>
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">
									<?php echo e(__('Generate Secret Key to Enable 2FA')); ?>

								</button>
							</div>

						</form>

                        <?php endif; ?>

                        <?php if($QR_Image != '' ): ?>

                        1. <?php echo e(__('Scan this QR code with your Google Authenticator App')); ?>. <code></code>
                        <br/>

                        <br/>

						<div>
                        	<img src="<?php echo $QR_Image; ?>">
                    	</div>
                        <?php endif; ?>

                        <br/><br/>

                    	
                        <?php if(Auth::user()->google2fa_secret != '' && Auth::user()->google2fa_enable == 0 ): ?>
                        2. <?php echo e(__('Enter the pin from Google Authenticator app')); ?>:<br/><br/>
						<form class="form-horizontal" method="POST" action="<?php echo e(route('enable2fa')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label for="one_time_password" class="col-md-4 control-label"><?php echo e(__('One Time Password')); ?></label>

                            <div class="col-md-6">
                                <input id="one_time_password" type="number" class="form-control" name="one_time_password" required autofocus>
                            </div>
                        </div>

                       



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>
                            </div>
                        </div>
                    </form>


                     <?php endif; ?>

                     <?php if(Auth::user()->google2fa_enable == 1): ?>

                     <div class="alert alert-success">
                                <?php echo e(__('2FA is currently')); ?> <strong><?php echo e(__('enabled')); ?></strong> <?php echo e(__('on your account')); ?>.
                            </div>
                            <p><?php echo e(__('If you are looking to disable Two Factor Authentication. Please confirm your password and Click Disable 2FA Button.')); ?></p>

                            <form class="form-horizontal" method="POST" action="<?php echo e(route('disable2fa')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                                    <label for="change-password" class="control-label">Current Password</label>
                                        <input id="current-password" type="password" class="form-control col-md-4" name="current-password" required>
                                        <?php if($errors->has('current-password')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('current-password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                </div>
                                <button type="submit" class="btn btn-primary "><?php echo e(__('Disable 2FA')); ?></button>
                            </form>

                            <?php endif; ?>
					
            </div>
        </div>
    </div>
</section>
<!-- profile update end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/google2fa/view.blade.php ENDPATH**/ ?>