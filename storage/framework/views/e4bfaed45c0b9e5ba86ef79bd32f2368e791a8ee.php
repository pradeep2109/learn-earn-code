
<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-home start -->
<?php if($about['one_enable'] == 1): ?>
<section id="about-home-one" class="about-home-one-main-block" style="background-image: url('<?php echo e(asset('images/about/'.$about->one_image)); ?>')">
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <h1 class="about-home-one-heading text-center"><?php echo e($about->one_heading); ?></h1>
    </div>
</section>
<section id="about-blog" class="about-blog-main-block">
    <div class="container-xl">
        <div class="about-blog-block text-center"><a href="<?php echo e($about->link_four); ?>" title="NextClass Blog"><span>
            <i class="fa fa-circle rgt-10"></i><?php echo e($gsetting->project_title); ?> <?php echo e(__('Blog')); ?>: </span><?php echo e($about->one_text); ?></a>
        </div>
    </div>   
</section>
<?php endif; ?> 
<!-- about-blog end -->
<!-- about-Transforming start -->
<?php if($about['two_enable'] == 1): ?>
<section id="about-transforming" class="about-transforming-main-block">
   <div class="container-xl">
        <div class="about-transforming-heading-block text-center">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <h1 class="text-center"><?php echo e($about->two_heading); ?></h1>  
                    <p><?php echo e($about->two_text); ?></p>
                </div>
            </div>
        </div>
     

        <div class="container-xl">
            <div class="row">
                <div class="col-lg-3">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">
                            <img src="<?php echo e(asset('images/about/'.$about->two_imageone)); ?>" class="img-fluid tab-img" alt="about-img">
                            <div class="about-nav-heading active"><?php echo e($about->two_txtone); ?></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">
                            <img src="<?php echo e(asset('images/about/'.$about->two_imagetwo)); ?>" class="img-fluid tab-img" alt="about-img">
                            <div class="about-nav-heading active"><?php echo e($about->two_txttwo); ?></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">
                            <img src="<?php echo e(asset('images/about/'.$about->two_imagethree)); ?>" class="img-fluid tab-img" alt="about-img">
                            <div class="about-nav-heading active"><?php echo e($about->two_txtthree); ?></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a id="tab-D" href="#pane-D" class="nav-link" data-toggle="tab" role="tab">
                            <img src="<?php echo e(asset('images/about/'.$about->two_imagefour)); ?>" class="img-fluid tab-img" alt="about-img">
                            <div class="about-nav-heading active"><?php echo e($about->two_txtfour); ?></div>
                          </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div id="content" class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                          <div class="card-header" role="tab" id="heading-A">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true" aria-controls="collapse-A">
                                    <?php echo e($about->two_txtone); ?>

                                  </a>
                            </h5>
                          </div>
                          <div id="collapse-A" class="collapse show" role="tabpanel" aria-labelledby="heading-A">
                            <div class="card-body">
                              <div class="about-transforming-img">
                                <a href="#" title="about">
                                    <img src="<?php echo e(asset('images/about/'.$about->two_imageone)); ?>" class="img-fluid" alt="about-img"><div class="overlay-bg"></div>
                                </a>
                            </div>
                            <div class="about-transforming-block">
                                <h3><?php echo e($about->two_txtone); ?></h3>
                                <p class="btm-40"><?php echo e($about->two_imagetext); ?></p>
                            </div>
                            </div>
                          </div>
                        </div>

                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                          <div class="card-header" role="tab" id="heading-B">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
                                    <?php echo e($about->two_txttwo); ?>

                                  </a>
                            </h5>
                          </div>
                          <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                            <div class="card-body">
                                <div class="about-transforming-img">
                                    <a href="#" title="about">
                                        <img src="<?php echo e(asset('images/about/'.$about->two_imagetwo)); ?>" class="img-fluid" alt="about-img"><div class="overlay-bg"></div>
                                    </a>
                                </div>
                                <div class="about-transforming-block">
                                    <h3><?php echo e($about->two_txttwo); ?></h3>
                                    <p class="btm-40"><?php echo e($about->text_one); ?></p>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                          <div class="card-header" role="tab" id="heading-C">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapse-C" data-parent="#content" aria-expanded="false" aria-controls="collapse-C">
                                    <?php echo e($about->two_txtthree); ?>

                                  </a>
                            </h5>
                          </div>
                          <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-C">
                            <div class="card-body">
                                <div class="about-transforming-img">
                                    <a href="#" title="about">
                                        <img src="<?php echo e(asset('images/about/'.$about->two_imagethree)); ?>" class="img-fluid" alt="about-img"><div class="overlay-bg"></div>
                                    </a>
                                </div>
                                <div class="about-transforming-block">
                                    <h3><?php echo e($about->two_txtthree); ?></h3>
                                    <p class="btm-40"><?php echo e($about->text_two); ?></p>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
                          <div class="card-header" role="tab" id="heading-D">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-D" data-parent="#content" aria-expanded="false" aria-controls="collapse-C">
                                    <?php echo e($about->two_txtfour); ?>

                                </a>
                            </h5>
                          </div>
                          <div id="collapse-D" class="collapse" role="tabpanel" aria-labelledby="heading-D">
                            <div class="card-body">
                                <div class="about-transforming-img">
                                    <a href="#" title="about">
                                        <img src="<?php echo e(asset('images/about/'.$about->two_imagefour)); ?>" class="img-fluid" alt="about-img"><div class="overlay-bg"></div>
                                    </a>
                                </div>
                                <div class="about-transforming-block">
                                    <h3><?php echo e($about->two_txtfour); ?></h3>
                                    <p class="btm-40"><?php echo e($about->text_three); ?></p>
                                </div>
                            </div>
                          </div>
                        </div>

                    </div>
                </div>
        </div>

   </div> 
</section>
<?php endif; ?>
<!-- about-Transforming end -->
<!-- facts start-->
<?php if($about['three_enable'] == 1): ?>
<section id="facts" class="facts-main-block about-facts">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="facts-block-heading text-center"><?php echo e($about->three_heading); ?></h1>
                <p class="text-center btm-40"><?php echo e($about->three_text); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="facts-block text-center btm-40">
                    <h1 class="facts-heading counter"><?php echo e($about->three_countone); ?></h1>
                    <div class="facts-dtl"><?php echo e($about->three_txtone); ?></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="facts-block text-center btm-40">
                    <h1 class="facts-heading counter"><?php echo e($about->three_counttwo); ?></h1>
                    <div class="facts-dtl"><?php echo e($about->three_txttwo); ?></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="facts-block text-center btm-40">
                    <h1 class="facts-heading counter"><?php echo e($about->three_countthree); ?></h1>
                    <div class="facts-dtl"><?php echo e($about->three_txtthree); ?></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="facts-block text-center btm-40">
                    <h1 class="facts-heading counter"><?php echo e($about->three_countfour); ?></h1>
                    <div class="facts-dtl"><?php echo e($about->three_txtfour); ?></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="facts-block text-center btm-40">
                    <h1 class="facts-heading counter"><?php echo e($about->three_countfive); ?></h1>
                    <div class="facts-dtl"><?php echo e($about->three_txtfive); ?></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="facts-block text-center btm-40">
                    <h1 class="facts-heading counter"><?php echo e($about->three_countsix); ?></h1>
                    <div class="facts-dtl"><?php echo e($about->three_txtsix); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- facts end-->
<!-- about-work start-->
<?php if($about['four_enable'] == 1): ?>
<section id="about-work" class="about-work-main-block">
    <div class="container-xl-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="about-work-block text-center">
                    <div class="about-work-heading"><?php echo e($about->four_heading); ?></div>
                    <p class="btm-30"><?php echo e($about->four_text); ?></p>
                   
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-work-video">
                    <div class="video-item hidden-xs">
                        <script type="text/javascript">
                        var video_url = '<iframe src="https://www.youtube.com/embed/ZMdCsIaE7II?autoplay=1&showinfo=0" frameborder="0"></iframe>';
                        </script>
                        <div class="video-device">
                            <img src="<?php echo e(asset('images/about/'.$about->four_imageone)); ?>" class="bg_img img-fluid" alt="Background">

                            <div class="overlay-bg"></div>
                            <div class="video-preview">
                                <p><?php echo e($about->four_txtone); ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="about-work-video">
                    <div class="video-item hidden-xs">
                        <script type="text/javascript">
                        var video_url = '<iframe src="https://www.youtube.com/embed/ZMdCsIaE7II?autoplay=1&showinfo=0" frameborder="0"></iframe>';
                        </script>
                        <div class="video-device">
                            <img src="<?php echo e(asset('images/about/'.$about->four_imagetwo)); ?>" class="bg_img img-fluid" alt="Background">

                            <div class="overlay-bg"></div>
                            <div class="video-preview">
                                <p><?php echo e($about->four_txttwo); ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-work-block text-center">
                    <div class="about-work-heading"><?php echo e($about->four_heading); ?></div>
                    <p class="text-white btm-30"><?php echo e($about->four_text); ?></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- about-work end-->
<!-- about-team start-->
<?php if($about['five_enable'] == 1): ?>
<section id="about-team" class="about-team-main-block">
    <div class="container-xl">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="about-team-block text-center">
                    <div class="about-team-heading btm-20"><?php echo e($about->five_heading); ?></div>
                    <p class="btm-40"><?php echo e(str_limit($about->five_text, $limit = 200, $end = '...')); ?></p>
                   
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-team-img">
                    <img src="<?php echo e(asset('images/about/'.$about->five_imageone)); ?>" class="img-fluid" alt="about-img">
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-6">
                       <div class="about-team-img">
                            <img src="<?php echo e(asset('images/about/'.$about->five_imagetwo)); ?>" class="img-fluid" alt="about-img">
                        </div> 
                    </div>
                    <div class="col-lg-6 col-sm-6">
                       <div class="about-team-img">
                            <img src="<?php echo e(asset('images/about/'.$about->five_imagethree)); ?>" class="img-fluid" alt="about-img">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- about-team start-->
<!-- about-learning-blog start-->
<?php if($about['six_enable'] == 1): ?>
<section id="about-learning-blog" class="about-learning-blog-main-block">
    <div class="container-xl">
        <h1 class="about-learning-blog-heading text-white text-center btm-40"><?php echo e($about->six_heading); ?></h1>
        <div class="about-learning-blog-block">
            <div class="row">
                <div class="col-lg-4">
                    <a href="<?php echo e($about->link_one); ?>">
                    <div class="about-learning-blog-dtl text-white btm-20">
                        <h3 class="about-learning-blog-dtl-heading text-white"><?php echo e($about->six_txtone); ?></h3>
                        <div class="row">
                            <div class="col-lg-10 col-9">
                                <div class="about-learning-blog-paragraph">
                                    <p><?php echo e(str_limit($about->six_deatilone, $limit = 100, $end = '...')); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="about-learning-blog-icon lft-7">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e($about->link_two); ?>">
                    <div class="about-learning-blog-dtl text-white btm-20">
                        <h3 class="about-learning-blog-dtl-heading text-white"><?php echo e($about->six_txttwo); ?></h3>
                        <div class="row">
                            <div class="col-lg-10 col-9">
                                <div class="about-learning-blog-paragraph lft-7">
                                    <p><?php echo e(str_limit($about->six_deatiltwo, $limit = 100, $end = '...')); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="about-learning-blog-icon">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e($about->link_three); ?>">
                    <div class="about-learning-blog-dtl text-white">
                        <h3 class="about-learning-blog-dtl-heading text-white"><?php echo e($about->six_txtthree); ?></h3>
                        <div class="row">
                            <div class="col-lg-10 col-9">
                                <div class="about-learning-blog-paragraph">
                                    <p><?php echo e(str_limit($about->six_deatilthree, $limit = 100, $end = '...')); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="about-learning-blog-icon lft-7">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="about-social-list text-white text-center">
        <ul>
            <li>Follow Us :</li>
            <?php if($about->four_btntext == !NULL): ?>
            <li><a href="<?php echo e($about->four_btntext); ?>" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <?php endif; ?>
            <?php if($about->five_btntext == !NULL): ?>
            <li><a href="<?php echo e($about->five_btntext); ?>" target="_blank" title="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <?php endif; ?>
            <?php if($about->linkedin == !NULL): ?>
            <li><a href="<?php echo e($about->linkedin); ?>" target="_blank" title="linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            <?php endif; ?>
            <?php if($about->twitter == !NULL): ?>
            <li><a href="<?php echo e($about->twitter); ?>" target="_blank" title="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
</section>
<?php endif; ?>
<!-- about-learning-blog end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/about.blade.php ENDPATH**/ ?>