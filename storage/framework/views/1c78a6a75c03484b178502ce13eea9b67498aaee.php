
<?php $__env->startSection('title', 'Flash Deals'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
                        <h1 class="wishlist-home-heading"><?php echo e(__('Flash Deals')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($deals!= NULL): ?>
<section id="learning-courses" class="learning-courses-main-block">
    <div class="container-xl">
        <div class="row">
        	<?php $__currentLoopData = $deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($deal->status == '1'): ?>
        	
                <div class="col-lg-3 col-md-6">
                    <div class="view-block">
                        <div class="view-img">
                            <?php if($deal['background_image'] !== NULL && $deal['background_image'] !== ''): ?>
                                <a href="<?php echo e(route('deal.items',$deal->id)); ?>"><img src="<?php echo e(asset('images/flashdeals/'.$deal->background_image)); ?>" class="img-fluid" alt="<?php echo e(__('course')); ?>">
                            <?php else: ?>
                                <a href="<?php echo e(route('deal.items',$deal->id)); ?>"><img src="<?php echo e(Avatar::create($deal->title)->toBase64()); ?>" class="img-fluid" alt="<?php echo e(__('course')); ?>">
                            <?php endif; ?>
                            </a>
                        </div>
                        
                        <div class="view-dtl flash-deal-block">
                            <div class="view-heading"><a href="<?php echo e(route('deal.items', $deal->id)); ?>"><?php echo e(str_limit($deal->title, $limit = 35, $end = '...')); ?></a></div>
                            <p class="btm-10"><a href="#"><span><?php echo e(__('Sale Start Date')); ?>: </span> <?php echo e(date('jS F Y', strtotime($deal->start_date))); ?></a></p>

                            <p class="btm-10"><a href="#"><span><?php echo e(__('Sale End Date')); ?>: </span> <?php echo e(date('jS F Y', strtotime($deal->end_date))); ?></a></p>
                          
                            
                        </div>
                    </div>
                    <div class="wishlist-action">
                        <div class="row">
                        	<div class="col-md-12 col-12">
                        		<div class="flash-button">
                               		<a href="<?php echo e(route('deal.items',$deal->id)); ?>" class="btn btn-primary"><i data-feather="eye"></i></a>
                               	</div>
                              
                        	</div>
                        	
                        </div>
                    </div>
                </div>
           
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
</section>
<?php else: ?>
<section id="search-block" class="search-main-block search-block-no-result text-center">
    <div class="container-xl">
        <div class="no-result-img btm-20">
            <img src="<?php echo e(url('/images/no-result.jpg')); ?>" class="img-fluid" alt="">
        </div>
        <div class="no-result-courses btm-10"><?php echo e(__('No Deals Found')); ?></div>
        <div class="recommendation-btn text-white text-center">
            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary" title="search"><b><?php echo e(__('Browse')); ?></b></a>
        </div> 
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/flashdeal/deals.blade.php ENDPATH**/ ?>