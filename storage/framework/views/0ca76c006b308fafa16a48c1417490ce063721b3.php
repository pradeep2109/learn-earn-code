
<?php $__env->startSection('title', 'Online Courses'); ?>
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
    <div class="container-fluid">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('Courses')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- search start -->
<?php if(count($search_data) > 0): ?>
    <section id="search-block" class="search-main-block">
        <div class="container-xl">
            <div class="row">
                
                <div class="col-lg-12">

                    <div class ="prod grid-view">
                     <!-- <div class ="view">
                      <i class= "fa fa-list " data-view ="list-view"></i>
                      <i class="selected fa fa-th" data-view ="grid-view"></i>
                     </div> -->
                        <div class="btn-group-web-screen">
                            <div class="btn-group mt-2 mb-4">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label id="gridview" class="btn btn-outline-dark active">
                                        <input type="radio" name="layout" id="layout3"> <i data-feather="grid"></i>
                                    </label>
                                    <label id="listview" class="btn btn-outline-dark">
                                        <input type="radio" name="layout" id="layout4" checked> <i data-feather="list"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="posts" class="students-bought btm-30">
                            <div class="row">
                                <?php $__currentLoopData = $search_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="search-item col-lg-3">
                                <?php if($course->status == 1): ?>
                            
                                    <div class="item first">
                                        <div class="course-bought-section protip" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block<?php echo e($course->id); ?>">

                                            <div class="view-img">

                                                <?php if($course['preview_image'] !== NULL && $course['preview_image'] !== ''): ?>
                                                <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src ="<?php echo e(asset('images/course/'.$course->preview_image)); ?>" alt="" class="img-fluid"></a>
                                                <?php else: ?>
                                                <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(Avatar::create($course->title)->toBase64()); ?>" alt="course" class="img-fluid"></a>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'trending'): ?>
                                                <div class="advance-badge">
                                                    <span class="badge bg-warning"><?php echo e(__('Trending')); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'featured'): ?>
                        
                                                <div class="advance-badge">
                                                    <span class="badge bg-danger"><?php echo e(__('Featured')); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'new'): ?>
                        
                                                <div class="advance-badge">
                                                    <span class="badge bg-success"><?php echo e(__('New')); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'onsale'): ?>
                        
                                                <div class="advance-badge">
                                                    <span class="badge bg-info"><?php echo e(__('Onsale')); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'bestseller'): ?>
                        
                                                <div class="advance-badge">
                                                    <span class="badge bg-success"><?php echo e(__('Bestseller')); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'beginner'): ?>
                        
                                                <div class="advance-badge">
                                                    <span class="badge bg-primary"><?php echo e(__('Beginner')); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($course['level_tags'] == 'intermediate'): ?>
                        
                                                <div class="advance-badge">
                                                    <span class="badge bg-secondary"><?php echo e(__('Intermediate')); ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <div class="view-user-img">

                                                    <?php if(optional($course->user)['user_img'] !== NULL && optional($course->user)['user_img'] !== ''): ?>
                                                    <a href="<?php echo e(route('all/profile',$course->user->id)); ?>" title=""><img src="<?php echo e(asset('images/user_img/'.$course->user['user_img'])); ?>"
                                                            class="img-fluid user-img-one" alt=""></a>
                                                    <?php else: ?>
                                                    <a href="<?php echo e(route('all/profile',$course->id)); ?>" title=""><img src="<?php echo e(asset('images/default/user.png')); ?>"
                                                            class="img-fluid user-img-one" alt=""></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            


                                            <div class="view-dtl">
                                                <div class="view-heading"><a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><?php echo e(str_limit($course->title, $limit = 30, $end = '...')); ?></a></div>
                                                
                                                <div class="categories-popularity-dtl">
                                                    <ul>
                                                        <li>
                                                            <?php
                                                                $data = App\CourseClass::where('course_id', $course->id)->get();
                                                                if(count($data)>0){

                                                                    echo count($data);
                                                                }
                                                                else{

                                                                    echo "0";
                                                                }
                                                            ?> <?php echo e(__('Classes')); ?> 
                                                        </li>
                                                    </ul>
                                                    <p><?php echo e(str_limit($course->short_detail, $limit = 60, $end = '..')); ?></p>
                                                </div>
                                                <div class="rating">
                                                    <ul>
                                                        <li>
                                                            <?php 
                                                                $learn = 0;
                                                                $price = 0;
                                                                $value = 0;
                                                                $sub_total = 0;
                                                                $sub_total = 0;
                                                                $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                                                                ?> 
                                                                <?php if(!empty($reviews[0])): ?>
                                                                <?php
                                                                $count =  App\ReviewRating::where('course_id',$course->id)->count();

                                                                foreach($reviews as $review){
                                                                    $learn = $review->price*5;
                                                                    $price = $review->price*5;
                                                                    $value = $review->value*5;
                                                                    $sub_total = $sub_total + $learn + $price + $value;
                                                                }

                                                                $count = ($count*3) * 5;
                                                                $rat = $sub_total/$count;
                                                                $ratings_var = ($rat*100)/5;
                                                            ?>
                                            
                                                            <div class="pull-left">
                                                                <div class="star-ratings-sprite"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                                                </div>
                                                            </div>
                                                    
                                                            
                                                            <?php else: ?>
                                                                <div class="pull-left"><?php echo e(__('No Rating')); ?></div>
                                                            <?php endif; ?>
                                                        </li>
                                                        <li>
                                                            (<?php
                                                                $data = App\ReviewRating::where('course_id', $course->id)->get();
                                                                if(count($data)>0){
                
                                                                    echo count($data);
                                                                }
                                                                else{
                
                                                                    echo "0";
                                                                }
                                                            ?> ratings)
                                                        </li> 
                                                    </ul>
                                                </div>
                                                <ul>
                                                    
                                                </ul>
                                                
                                            </div>
                                            <div class="view-footer">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-6">                                                
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <div class="rate text-right">
                                                            <ul>
                                                                
                                                                <?php if($course->type == 1): ?>
                                                                    <?php if($course->discount_price == !NULL): ?>
                                                                        <li><a><b><?php echo e(currency($course->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                                                        <li><a><b><strike><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                                                            
                                                                            
                                                                    <?php else: ?>

                                                                        <?php if($course->price == !NULL): ?>

                                                                        <li><a><b><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>

                                                                        <?php endif; ?>
                                                                    <?php endif; ?>

                                                                <?php else: ?>
                                                                <div class="rate text-right">
                                                                    <ul>
                                                                        <li><a><b><?php echo e(__('Free')); ?></b></a></li>
                                                                    </ul>
                                                                </div>
                                                                <?php endif; ?>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if($course['whatlearns']->isNotEmpty()): ?>
                                            <div id="prime-next-item-description-block<?php echo e($course->id); ?>" class="prime-description-block">
                                                <div class="prime-description-under-block">
                                                    <div class="prime-description-under-block">
                                                        <h6><?php echo e(__('What you will learn')); ?></h6>
                                                        
                                                        <?php $__currentLoopData = $course['whatlearns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($wl->status ==1): ?>
                                                            <div class="product-learn-dtl protip-whatlearn">
                                                                <ul>
                                                                    <li><i class="fa fa-check"></i><?php echo e(str_limit($wl['detail'], $limit = 120, $end = '...')); ?></li>
                                                                </ul>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                <?php endif; ?>
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="search-block" class="search-main-block search-block-no-result">
        <div class="container-xl">
          <h2><?php echo e(__('No search')); ?> "<?php echo e($searchTerm); ?>"</h2>
        </div>
    </section>
<?php endif; ?>
<!-- search end -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom-script'); ?>
<script type="text/javascript">
      $('.item i').on('click', function(){
      $(this).toggleClass('fa-plus fa-minus').next().slideToggle()
    })
    /* list or grid item*/
    $(".view i").click(function(){

      $('.prod').removeClass('grid-view list-view').addClass($(this).data('view'));

    })
    $(".view i").click(function(){

      $(this).addClass('selected').siblings().removeClass('selected');

    })
</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/search.blade.php ENDPATH**/ ?>