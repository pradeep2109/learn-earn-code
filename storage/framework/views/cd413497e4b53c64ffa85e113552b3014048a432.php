<!-- Affiliate Referral section start -->

<?php $__env->startSection('title', 'Refer Link'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- affiliate-header start -->
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
                        <h1 class="wishlist-home-heading"><?php echo e(__('Refer & Earn')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- affiliate-header end -->

<!-- affiliate-user-link start -->
<section id="profile-item" class="profile-item-block refer-block">
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
                            <a href="<?php echo e(route('mycourse.show')); ?>" title="<?php echo e(__('Dashboard')); ?>"><?php echo e(__('My Courses')); ?></a>
                        </li>
                        <li>
                            <i class="fa fa-heart"></i>
                            <a href="<?php echo e(route('wishlist.show')); ?>" title="<?php echo e(__('Profile Update')); ?>"><?php echo e(__('My Wishlist')); ?></a>
                        </li>
                        <li>
                            <i class="fa fa-history"></i>
                            <a href="<?php echo e(route('purchase.show')); ?>" title="<?php echo e(__('Followers')); ?>"><?php echo e(__('Purchase History')); ?></a>
                        </li>
                        <li>
                            <i class="fa fa-user"></i>
                            <a href="<?php echo e(route('profile.show',Auth::user()->id)); ?>" title="<?php echo e(__('Upload Items')); ?>"><?php echo e(__('User Profile')); ?></a>
                        </li>
                        <?php if(Auth::user()->role == "user"): ?>
                        <li>
                            <i class="fas fa-chalkboard-teacher"></i>
                            <a href="#" data-toggle="modal" data-target="#myModalinstructor" title="<?php echo e(__('Become An Instructor')); ?>"><?php echo e(__('Become An Instructor')); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="affiliate-dashboard-wallet">
                    <h4 class="title">Wallet</h4>
                    <div class="row mt-4">
                        <div class="col-lg-4 col-3">  
                            <div class="affiliate-dashboard-wallet-img">
                                <img src="<?php echo e(url('/images/wallet.png')); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-9">
                            <div class="affiliate-dashboard-wallet-dtl">
                                <h6><?php echo e(__('Total Balance')); ?></h6>
                                <p class="wallet-balance">2700</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-8">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="affiliate-dashboard-card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-3"><?php echo e(__('Start refering your friends and start earning !!')); ?></h4>
                                <p class="card-text text-center mb-4">
                                    <?php echo e(__('This is your unique refer link share with your friends and family and start earning !')); ?>

                                </p>
                                <?php if(auth()->guard()->check()): ?>
                                <div class="input-group">
                                    <input type="text" id="myInput" class="form-control" value="<?php echo e(url('/register') . '/?ref=' . Auth::user()->affiliate_id); ?>" >
                                    <div class="input-group-append refer-btn">
                                        <button onclick="myFunction()" class="btn btn-primary" type="button"><i data-feather="copy"></i></button>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(auth()->user()->affiliate_id == NULL): ?>

                                <form id="mainform" action="<?php echo e(route('generate.affiliate')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                    <button type="submit" class="pull-left btn btn-primary">
                                    <?php echo e(__('Generate Affiliate Link')); ?>

                                    </button>
                                </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="qr-code-block">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="qr-code-title"><?php echo e(__('Simple QR Code')); ?></h4>
                                </div>
                                <div class="card-body">
                                    
                                    <?php 
                                        $path= url('/register') . '/?ref=' . Auth::user()->affiliate_id;
                                    ?>
        
                                    <?php echo QrCode::size(200)->generate($path); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-info-block user-bank-button">
                    

                    <?php
                      $affilates = App\Affiliate::first();
                    ?>
                      
                    <?php if(isset($affilates)): ?>
                        <?php if($affilates['image'] !== NULL && $affilates['image'] !== ''): ?>
                        
                            <div class="recommendation-main-block  text-center" style="background-image: url('<?php echo e(asset('images/affiliate/'.$affilates['image'])); ?>')">
                           
                            </div>
                            <br>
                        <?php endif; ?>
                        <div class="info"><?php echo $affilates->text; ?></div>
                    <?php endif; ?>
                 
                    <br>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- affiliate-user-link end -->
<?php $__env->stopSection(); ?>
<!-- Affiliate Referral section end -->
<?php $__env->startSection('custom-script'); ?>
<script>
    function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");
    
      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */
    
      /* Copy the text inside the text field */
      navigator.clipboard.writeText(copyText.value);
      
      /* Alert the copied text */
    }
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/affiliate/show.blade.php ENDPATH**/ ?>