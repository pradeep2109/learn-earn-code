
<?php $__env->startSection('title', 'Blog'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- about-home start -->
<?php
$gets = App\Breadcum::first();
?>
<?php if(isset($gets)): ?>
<section id="business-home" class="business-home-main-block">
    <div class="business-img">
        <?php if($gets['img'] !== NULL && $gets['img'] !== ''): ?>
        <img src="<?php echo e(url('/images/breadcum/'.$gets->img)); ?>" class="img-fluid" alt="" />
        <?php else: ?>
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('Blog Detail')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- about-home end --> 
<!-- blog start -->
<?php if(isset($blogs)): ?>
<section id="blog" class="blog-main-block">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-12">
                <div id="blog-slider" class="blog-slider owl-carousel btm-40">
                    <?php $__currentLoopData = $blogs->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item blog-slider-block">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="blog-slider-img">
                                        <?php if($item->slug != NULL): ?>
                                            <a href="<?php echo e(route('blog.detail', ['id' => $item->id, 'slug' => $item->slug ])); ?>">
                                        <?php else: ?>
                                             <a href="<?php echo e(route('blog.detail', ['id' => $item->id, 'slug' => str_slug(str_replace('-','&',$item->heading)) ])); ?>">
                                        <?php endif; ?>
                                            <img src="<?php echo e(asset('images/blog/'.$item->image)); ?>" class="img-fluid" alt="blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <div class="blog-slider-dtl">
                                        <div class="view-date">
                                            <a href="#"><i data-feather="calendar"></i>
                                                <?php echo e(date('d-m-Y',strtotime($item['created_at']))); ?></a>
                                        </div>
                                        <h3 class="blog-slider-heading">
                                            <?php if($item->slug != NULL): ?>
                                                <a href="<?php echo e(route('blog.detail', ['id' => $item->id, 'slug' => $item->slug ])); ?>"><?php echo e($item->heading); ?></a>
                                            <?php else: ?>
                                                 <a href="<?php echo e(route('blog.detail', ['id' => $item->id, 'slug' => str_slug(str_replace('-','&',$item->heading)) ])); ?>"><?php echo e($item->heading); ?></a>
                                            <?php endif; ?>
                                        </h3>
                                        <p class="btm-10"><?php echo e(substr(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($item->detail))), 0, 400)); ?></p>
                                        <div class="business-home-slider-btn btm-20">
                                            <?php if($item->slug != NULL): ?>

                                            <button onclick="window.location.href='<?php echo e(route('blog.detail', ['id' => $item->id, 'slug' => $item->slug ])); ?>';"  type="button" class="btn btn-link"><?php echo e($item->text); ?></button>

                                            <?php else: ?>

                                            <button onclick="window.location.href='<?php echo e(route('blog.detail', ['id' => $item->id, 'slug' => str_slug(str_replace('-','&',$item->heading)) ])); ?>';"  type="button" class="btn btn-link"><?php echo e($item->text); ?></button>

                                            <?php endif; ?>


                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-block btm-40">
                            <div class="blog-block-img">
                               <?php if($blog->slug != NULL): ?>
                                    <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>"><img src="<?php echo e(asset('images/blog/'.$blog->image)); ?>" class="img-fluid"  alt="blog"></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>"><img src="<?php echo e(asset('images/blog/'.$blog->image)); ?>" class="img-fluid"  alt="blog"></a>
                                <?php endif; ?>
                            </div>
                            <div class="block-block-dtl">
                                <h3 class="blog-slider-heading">
                                    
                                    <?php if($blog->slug != NULL): ?>
                                        <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>"><?php echo e($blog->heading); ?></a>
                                    <?php else: ?>
                                         <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>"><?php echo e($blog->heading); ?></a>
                                    <?php endif; ?>
                                </h3>
                                <p><?php echo e(substr(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog->detail))), 0, 151)); ?>...</p>
                                <div class="view-footer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="view-date">
                                                <a href="#"><i data-feather="calendar"></i>
                                                    <?php echo e(date('d-m-Y',strtotime($blog['created_at']))); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="view-time text-right">
                                                <a href="#"><i data-feather="clock"></i>
                                                    <?php echo e(date('h:i:s A',strtotime($blog['created_at']))); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="pull-right"><?php echo e($blogs->links()); ?></div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>
<!-- blog end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/blog/blog.blade.php ENDPATH**/ ?>