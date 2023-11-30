
<?php $__env->startSection('title', "$blog->heading"); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('meta_tags'); ?>
<?php
    $url =  URL::current();
?>

<meta name="title" content="<?php echo e($blog['heading']); ?>">
<meta name="description" content="<?php echo e(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog['detail'])))); ?> ">
<meta name="author" content="elsecolor">
<meta property="og:title" content="<?php echo e($blog['heading']); ?> ">
<meta property="og:url" content="<?php echo e($url); ?>">
<meta property="og:description" content="<?php echo e(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog['detail'])))); ?>">
<meta property="og:image" content="<?php echo e(asset('images/blog/'.$blog['image'])); ?>">
<meta itemprop="image" content="<?php echo e(asset('images/blog/'.$blog['image'])); ?>">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo e(asset('images/blog/'.$blog['image'])); ?>">
<meta property="twitter:title" content="<?php echo e($blog['heading']); ?> ">
<meta property="twitter:description" content="<?php echo e(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog['detail'])))); ?>">
<meta name="twitter:site" content="<?php echo e(url()->full()); ?>" />

<link rel="canonical" href="<?php echo e(url()->full()); ?>"/>
<meta name="robots" content="all">
<meta name="keywords" content="<?php echo e($gsetting->meta_data_keyword); ?>">
    

<?php $__env->stopSection(); ?>
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
                        <h1 class="wishlist-home-heading"><?php echo e(__('Blog Detail')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- blog-dtl start-->
<section id="blog-dtl" class="blog-dtl-main-block">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="blog-dtl-img btm-30">
                    <img src="<?php echo e(asset('images/blog/'.$blog->image)); ?>" class="img-fluid" alt="blog"> 
                </div>
                <ul>
                    <li>
                        <div class="view-date">
                            <a href="#"><i data-feather="calendar"></i>
                                <?php echo e(date('d-m-Y',strtotime($blog['created_at']))); ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="view-time">
                            <a href="#"><i data-feather="clock"></i>
                                <?php echo e(date('h:i:s A',strtotime($blog['created_at']))); ?></a>
                        </div>
                    </li>
                </ul> 
                <div class="blog-dtl-block-heading btm-20"><?php echo e($blog->heading); ?></div>                
                <!-- <div class="blog-idea btm-30"><a href="#" title="blog-idea"><?php echo e($blog->text); ?></a></div> -->
                <p class="btm-20"><?php echo $blog->detail; ?></p>
                <div class="blog-link btm-30">
                    <a href="<?php echo e(route('blog.all')); ?>" class="btn btn-primary" title="<?php echo e(__('back to blog')); ?>"><i class="fa fa-chevron-left"></i><?php echo e(__('Back to Blog')); ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog-dtl-sidebar">
                    <h4 class="sidebar-heading"><?php echo e(__('Recent Posts')); ?></h4>
                     <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="sidebar-block">
                        <div class="row">
                            

                            <div class="col-lg-4 col-md-4 col-4">
                                <img src="<?php echo e(asset('images/blog/'.$b->image)); ?>" class="img-fluid"  alt="<?php echo e(__('blog')); ?>">
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <h5 class="sidebar-block-heading"><a href="<?php echo e(route('blog.detail', ['id' => $b->id, 'slug' => $b->slug ])); ?>" title=""><?php echo e($b->heading); ?></a></h5>
                                <div class="view-date">
                                    <a href="#"><i data-feather="calendar"></i><?php echo e(date('d-m-Y',strtotime($b['created_at']))); ?></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('blog.all')); ?>" class="btn btn-primary" title=""><?php echo e(__('View All Posts')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-dtl end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/blog/blog_detail.blade.php ENDPATH**/ ?>