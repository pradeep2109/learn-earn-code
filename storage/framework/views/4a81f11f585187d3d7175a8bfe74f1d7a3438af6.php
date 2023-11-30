<!-- User Wallet page start -->

<?php $__env->startSection('title', __('My Wallet')); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- wallet-header start -->
<?php
$gets = App\Breadcum::first();
?>
<?php if(isset($gets)): ?>
<section id="business-home" class="business-home-main-block">
    <div class="business-img">
        <?php if($gets['img'] !== NULL && $gets['img'] !== ''): ?>
        <img src="<?php echo e(url('/images/breadcum/'.$gets->img)); ?>" class="img-fluid" alt="" />
        <?php else: ?>
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="course" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('My Wallet')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- wallet-header end -->
<!-- user wallet page start -->
<section id="profile-item" class="profile-item-block">
    <div class="container-xl">

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="dashboard-author-block text-center">
                    <div class="author-image">
					    <div class="avatar-upload">
					        <div class="avatar-preview">
					        	<?php if(Auth::user()->user_img != null || Auth::user()->user_img !=''): ?>
						            <div class="avatar-preview-img" id="imagePreview" style="background-image: url(<?php echo e(url('/images/user_img/'.Auth::user()->user_img)); ?>);">
						            </div>
						        <?php else: ?>
						        	<div class="avatar-preview-img" id="imagePreview" style="background-image: url(<?php echo e(asset('images/default/user.jpg')); ?>);">
						            </div>
						        <?php endif; ?>
					        </div>
					    </div>
                    </div>
                    <div class="author-name"><?php echo e(Auth::user()->fname); ?>&nbsp;<?php echo e(Auth::user()->lname); ?></div>
                </div>
                <div class="dashboard-items">
                    <ul>
                        <li>
                            <i class="fa fa-bookmark"></i>
                            <a href="<?php echo e(route('mycourse.show')); ?>" title="<?php echo e(__('My Courses')); ?>"><?php echo e(__('My Courses')); ?></a>
                        </li>
                        <li><i class="fa fa-heart"></i><a href="<?php echo e(route('wishlist.show')); ?>" title="<?php echo e(__('My Wishlist')); ?>"><?php echo e(__('My Wishlist')); ?></a></li>
                        <li><i class="fa fa-history"></i><a href="<?php echo e(route('purchase.show')); ?>" title="<?php echo e(__('Purchase History')); ?>"><?php echo e(__('Purchase History')); ?></a></li>
                        <li><i class="fa fa-user"></i><a href="<?php echo e(route('profile.show',Auth::user()->id)); ?>" title="<?php echo e(__('User Profile')); ?>"><?php echo e(__('User Profile')); ?></a></li>
                        <?php if(Auth::user()->role == "user"): ?>
                        <li><i class="fas fa-chalkboard-teacher"></i><a href="#" data-toggle="modal" data-target="#myModalinstructor" title="<?php echo e(__("Become An Instructor")); ?>"><?php echo e(__('Become An Instructor')); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-8">

                <div class="profile-info-block user-bank-button">

                	<h4 class=""><?php echo e(__('My Wallet')); ?></h4>
			            <h4 class=""><?php echo e(__('Current Balance')); ?> :
			         

			            <div class="display-inline">
                        <?php if(isset($user->wallet)): ?>
                            <i class="<?php echo e($currency->icon); ?>"></i><?php echo e(sprintf("%.2f",strip_tags($user->wallet->balance))); ?> 
                        <?php endif; ?> 
                  </div>
                  </h4>
			        
          			
          		 <div class=""><?php echo e(__('Add balance To Wallet')); ?>:</div>

                  <form id="" action="<?php echo e(route('wallet.payment')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                    
                      <input name="amount" required="" type="number" class="form-control" value="1.00" placeholder="0.00" min="1" step="0.01" aria-describedby="basic-addon1">
                    </div>
                    <br>
                  
                      <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Proceed')); ?>

                      </button>

                  </form>
               
                   
                </div>
                
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<!-- User Wallet page end -->

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/wallet/mywallet.blade.php ENDPATH**/ ?>