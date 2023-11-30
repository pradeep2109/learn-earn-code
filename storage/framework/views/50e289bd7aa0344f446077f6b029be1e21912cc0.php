
<?php $__env->startSection('title', 'Institute Detail'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="institute-detail" class="institute-detail-main-block">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="institute-detail-block text-center">
                    <div class="institute-detail-img">
                        <?php if($institute['image'] !== NULL && $institute['image'] !== ''): ?>
                        <img src="<?php echo e(asset('files/institute/'.$institute['image'])); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid">
                        <?php else: ?>
                            <img src="<?php echo e(Avatar::create($institute->title)->toBase64()); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid">
                        <?php endif; ?>                    
                    </div>
                    <div class="institute-dtl">
                        <div class="institute-content-block">
                            <h2 class="institute-content-title"><?php echo e($institute ->title); ?></h2>
                            <div class="institute-mobile"><?php echo e($institute ->mobile); ?></div>
                            <div class="institute-email"><?php echo e($institute ->email); ?></div>
                            <div class="institute-address"><?php echo e($institute ->address); ?></div>
                            <div class="institute-status mt-2 mb-2">
                                <span class="badge badge-primary"> <?php if($institute->status == '1'): ?>
                                    <?php echo e(__('Active')); ?>

                                    <?php else: ?>
                                    <?php echo e(__('Deactivate')); ?>


                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="institute-verified mt-2 mb-2">
                                <span class="badge badge-success"><?php if($institute->verified == '1'): ?>
                                    <?php echo e(__('Verified')); ?>

                                    <?php else: ?>
                                    <?php echo e(__('Not verified')); ?>


                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="institute-detail-tab">
                    <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="true">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="skill-tab" data-toggle="tab" href="#skill" role="tab" aria-controls="skill" aria-selected="true">Skill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="affiliated-tab" data-toggle="tab" href="#affiliated" role="tab" aria-controls="affiliated" aria-selected="true">Affiliated</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane active show" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                            <?php if(isset($course)): ?>
                            <div class="about-instructor">
                                <div class="row">
                                    <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($c->status == 1): ?>
                                        <div class="col-lg-6">
                                            <div class="student-view-block">
                                                <div class="view-block">
                                                    <div class="view-img">
                                                        <?php if($c['preview_image'] !== NULL && $c['preview_image'] !== ''): ?>
                                                            <a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$c['preview_image'])); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid"></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><img src="<?php echo e(Avatar::create($c->title)->toBase64()); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid"></a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="view-user-img">

                                                        <?php if(optional($c->user)['user_img'] !== NULL && optional($c->user)['user_img'] !== ''): ?>
                                                        <a href="" title=""><img src="<?php echo e(asset('images/user_img/'.$c->user['user_img'])); ?>"
                                                                class="img-fluid user-img-one" alt=""></a>
                                                        <?php else: ?>
                                                        <a href="" title=""><img src="<?php echo e(asset('images/default/user.png')); ?>"
                                                                class="img-fluid user-img-one" alt=""></a>
                                                        <?php endif; ?>
                            
                            
                                                    </div>
                                                    <div class="view-dtl">
                                                        <div class="view-heading"><a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><?php echo e(str_limit($c->title, $limit = 30, $end = '...')); ?></a></div>
                                                        <div class="user-name">
                                                            <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
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
                                                                    $reviews = App\ReviewRating::where('course_id',$c->id)->get();
                                                                    ?> 
                                                                    <?php if(!empty($reviews[0])): ?>
                                                                    <?php
                                                                    $count =  App\ReviewRating::where('course_id',$c->id)->count();

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
                                                                <!-- overall rating-->
                                                                <?php 
                                                                $learn = 0;
                                                                $price = 0;
                                                                $value = 0;
                                                                $sub_total = 0;
                                                                $count =  count($reviews);
                                                                $onlyrev = array();

                                                                $reviewcount = App\ReviewRating::where('course_id', $c->id)->WhereNotNull('review')->get();

                                                                foreach($reviews as $review){

                                                                    $learn = $review->learn*5;
                                                                    $price = $review->price*5;
                                                                    $value = $review->value*5;
                                                                    $sub_total = $sub_total + $learn + $price + $value;
                                                                }

                                                                $count = ($count*3) * 5;
                                                                
                                                                if($count != "" && $count != '0')
                                                                {
                                                                    $rat = $sub_total/$count;
                                                            
                                                                    $ratings_var = ($rat*100)/5;
                                                            
                                                                    $overallrating = ($ratings_var/2)/10;
                                                                }
                                                                
                                                                ?>

                                                                <?php
                                                                    $reviewsrating = App\ReviewRating::where('course_id', $c->id)->first();
                                                                ?>
                                                                <li class="reviews">
                                                                    (<?php
                                                                    $data = App\ReviewRating::where('course_id', $c->id)->count();
                                                                    if($data>0){
                            
                                                                    echo $data;
                                                                    }
                                                                    else{
                            
                                                                    echo "0";
                                                                    }
                                                                    ?> Reviews)
                                                                </li>
                                                            </ul>
                                                        </div>
                                                            <div class="view-footer">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                        <div class="count-user">
                                                                            <i data-feather="user"></i><span>1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                        <?php if( $c->type == 1): ?>
                                                                        <div class="rate text-right">
                                                                            <ul>
                                                                                <?php
                                                                                    $currency = App\Currency::first();
                                                                                ?>
                    
                                                                                <?php if($c->discount_price == !NULL): ?>
                                                                                <li><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?><?php echo e(price_format(  currency($c->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></li>
                                                                                <li><strike><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?><?php echo e(price_format(  currency($c->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></strike></li>
                                                                                    
                                                                                    
                                                                                <?php else: ?>
                                                                                <li><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?><?php echo e(price_format(  currency($c->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></li>

                                                                                    
                                                                                <?php endif; ?>
                                                                            </ul>
                                                                        </div>
                                                                        <?php else: ?>
                                                                        <div class="rate text-right">
                                                                            <ul>
                                                                                <li><a><b><?php echo e(__('Free')); ?></b></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                            </div>  
                            <?php else: ?>
                                <div class="about-instructor-no-found"><i data-feather="Frown"></i>No Data Found</div>                          
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                           <p><?php echo e($institute->detail); ?></p>
                        </div>
                        <div class="tab-pane" id="skill" role="tabpanel" aria-labelledby="skill-tab">
                            <ul>
                                <li><span class="badge badge-info"><?php echo e($institute->skill); ?></span></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="affiliated" role="tabpanel" aria-labelledby="affiliated-tab">
                            <ul>
                                <li><span class="badge badge-info"><?php echo e($institute->affilated_by); ?></span></li>                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/institute/slug.blade.php ENDPATH**/ ?>