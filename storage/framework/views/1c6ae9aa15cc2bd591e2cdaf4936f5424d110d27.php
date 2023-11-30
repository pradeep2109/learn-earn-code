
<?php $__env->startSection('title'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- breadcumb start -->
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
                        <h1 class="wishlist-home-heading"><?php echo e(__('Student Profile')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- breadcumb end -->
<section id="student-profile" class="student-profile-main-block">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-12">
                <div class="student-profile-sidebar mb-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="student-profile-img">
                                <?php if($users['user_img'] !== NULL && $users['user_img'] !== ''): ?>
                                <img src="<?php echo e(url('/images/user_img/'.$users->user_img)); ?>"  class="img-fluid" />
                                <?php else: ?>
                                <img src="<?php echo e(Avatar::create($users->fname)->toBase64()); ?>" alt="<?php echo e(__('course')); ?>"
                                    class="img-fluid">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-8">
                                    <h2 class="student-name"><?php echo e($users->fname); ?> <?php echo e($users->lname); ?></h2>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <div class="student-profile-share text-right">
                                        <a href="#" data-toggle="modal" data-target="#myModalshare" title="share" data-dismiss="modal"><i data-feather="share"></i>Share</a>
                                    </div>
                                </div>
                                <div class="modal fade" data-backdrop="" style="z-index: 1050;" id="myModalshare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel"><?php echo e(__('Share this profile')); ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="box box-primary">
                                                <div class="panel panel-sum">
                                                    <div class="modal-body">
                                                        <?php
                                                            $url=  URL::current();
                                                        ?>
                                                        <div class="nav-search">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="myInput"  value="<?php echo e($url); ?>">
                                                            </div>
                                                            <button onclick="myFunction()" class="btn btn-primary"><i data-feather="copy"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="student-des"><p><?php echo e($users->detail); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="student-course-info">
                            <div class="student-contact-dtl">
                                <h4>Contact</h4>
                                <p><?php echo e($users->mobile); ?></p>
                            </div>
                            <div class="student-social-dtl">
                                <h4>Social Media</h4>
                                <p><span>Email: </span><br><?php echo e($users->email); ?></p>
                                <?php if(isset($linkedin_url)): ?>
                                <p><span>Linkdin: </span><br><?php echo e($users->linkedin_url); ?></p>
                                <?php endif; ?>
                                <?php if(isset($fb_url)): ?>
                                <p><span>Facebook: </span><br><?php echo e($users->fb_url); ?></p>
                                <?php endif; ?>
                                <?php if(isset($youtube_url)): ?>
                                <p><span>youtube: </span><br><?php echo e($users->youtube_url); ?></p>
                                <?php endif; ?>
                                <?php if(isset($twitter_url)): ?>
                                <p><span>Twitter: </span><br><?php echo e($users->twitter_url); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="student-course-info">
                            <div class="student-courses">
                                <h4>My Courses</h4>
                                <section id="learning-courses" class="learning-courses-main-block">
                                    <div class="container-xl">
                                        
                                        <div class="row">
                                            <?php $__currentLoopData = $enroll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($enrol->course_id != NULL): ?>
                                            <?php if($enrol->status == 1): ?>
                                            <?php if($enrol->user_id == Auth::User()->id): ?>
                                
                                
                                            <div class="col-lg-4 col-md-12">
                                
                                                <div class="view-block">
                                                    <div class="view-img">
                                                        <?php if($enrol->courses['preview_image'] !== NULL && $enrol->courses['preview_image'] !== ''): ?>
                                                        <a
                                                            href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><img
                                                                src="<?php echo e(asset('images/course/'.$enrol->courses->preview_image)); ?>" class="img-fluid"
                                                                alt="student">
                                                        </a>
                                                        <?php else: ?>
                                                        <a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><img
                                                                src="<?php echo e(Avatar::create($enrol->courses->title)->toBase64()); ?>" class="img-fluid"
                                                                alt="student"></a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="view-dtl">
                                                        <div class="view-heading"><a
                                                                href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><?php echo e(str_limit($enrol->courses->title, $limit = 35, $end = '...')); ?></a>
                                                        </div>
                                                        <div class="user-name">
                                                            <h6><?php echo e(__('By')); ?> <span><?php echo e(optional($enrol->courses->user)['fname']); ?></span></h6>
                                                        </div>
                                                        <!-- <p class="btm-10"><a href="#">by <?php if(isset($enrol->courses->user)): ?>
                                                                <?php echo e($enrol->courses->user->fname); ?> <?php endif; ?></a></p> -->
                                                        <div class="rating">
                                                            <ul>
                                                                <li>
                                                                    <!-- star rating -->
                                                                    <?php 
                                                                        $learn = 0;
                                                                        $price = 0;
                                                                        $value = 0;
                                                                        $sub_total = 0;
                                                                        $sub_total = 0;
                                                                        $reviews = App\ReviewRating::where('course_id',$enrol->courses->id)->where('status','1')->get();
                                                                        ?>
                                                                    <?php if(!empty($reviews[0])): ?>
                                                                    <?php
                                                                        $count =  App\ReviewRating::where('course_id',$enrol->courses->id)->count();
                                
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
                                                                        <div class="star-ratings-sprite"><span
                                                                                style="width:<?php echo $ratings_var; ?>%"
                                                                                class="star-ratings-sprite-rating"></span>
                                                                        </div>
                                                                    </div>
                                                                    <?php else: ?>
                                                                    <div class="pull-left">
                                                                        <?php echo e(__('No Rating')); ?>

                                                                    </div>
                                                                    <?php endif; ?>
                                                                </li>
                                                                <!-- overall rating -->
                                                                <?php
                                                                $reviews = App\ReviewRating::where('course_id' ,$enrol->courses->id)->get();
                                                                ?>
                                                                <?php 
                                                                    $learn = 0;
                                                                    $price = 0;
                                                                    $value = 0;
                                                                    $sub_total = 0;
                                                                    $count =  count($reviews);
                                                                    $onlyrev = array();
                                
                                                                    $reviewcount = App\ReviewRating::where('course_id', $enrol->courses->id)->where('status',"1")->WhereNotNull('review')->get();
                                
                                                                    foreach($reviewcount as $review){
                                
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
                                                                $reviewsrating = App\ReviewRating::where('course_id', $enrol->courses->id)->first();
                                                                ?>
                                                                <?php if(!empty($reviewsrating)): ?>
                                                                <!-- <li>
                                                                    <b><?php echo e(round($overallrating, 1)); ?></b>
                                                                </li> -->
                                                                <?php endif; ?>
                                
                                                                <li class="reviews">
                                                                    (<?php
                                                                    $data = App\ReviewRating::where('course_id', $enrol->courses->id)->count();
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
                                
                                
                                                        <div class="mycourse-progress">
                                
                                                            <?php
                                                                $progress = App\CourseProgress::where('course_id', $enrol->course_id)->where('user_id', Auth::User()->id)->first();
                                                                                ?>
                                                            <?php if(!empty($progress)): ?>
                                
                                                            <?php
                                                                                    
                                                                $total_class = $progress->all_chapter_id;
                                                                $total_count = count($total_class);
                                
                                                                $total_per = 100;
                                
                                                                $read_class = $progress->mark_chapter_id;
                                                                $read_count =  count($read_class);
                                
                                                                $progres = ($read_count/$total_count) * 100;
                                                                ?>
                                
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                                    style="width: <?php echo $progres; ?>%" aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <div class="complete"><?php echo $progres; ?>% <?php echo e(__('Complete')); ?></div>
                                                            <?php else: ?>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                                    style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <div class="complete"><?php echo e(__('Start Course')); ?></div>
                                                            <?php endif; ?>
                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <?php else: ?>
                                
                                            <?php
                                            $bundle_order = App\BundleCourse::where('id', $enrol->bundle_id)->first();
                                            ?>
                                
                                            <?php $__currentLoopData = $bundle_order->course_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                
                                            $coursess = App\Course::where('id', $bundle_course)->first();
                                
                                            ?>
                                
                                            <div class="col-lg-4 col-md-12">
                                
                                                <div class="view-block">
                                                    <div class="view-img">
                                                        <?php if($coursess['preview_image'] !== NULL && $coursess['preview_image'] !== ''): ?>
                                                        <a href="<?php echo e(route('course.content',['id' => $coursess->id, 'slug' => $coursess->slug ])); ?>"><img
                                                                src="<?php echo e(asset('images/course/'.$coursess->preview_image)); ?>" class="img-fluid"
                                                                alt="student">
                                                        </a>
                                                        <?php else: ?>
                                                        <a href="<?php echo e(route('course.content',['id' => $coursess->id, 'slug' => $coursess->slug ])); ?>"><img
                                                                src="<?php echo e(Avatar::create($coursess->title)->toBase64()); ?>" class="img-fluid"
                                                                alt="student"></a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="view-dtl">
                                                        <div class="view-heading"><a
                                                                href="<?php echo e(route('course.content',['id' => $coursess->id, 'slug' => $coursess->slug ])); ?>"><?php echo e(str_limit($coursess->title, $limit = 35, $end = '...')); ?></a>
                                                        </div>
                                                        <div class="user-name">
                                                            <h6>By <span><?php echo e(optional($coursess->user)['fname']); ?></span></h6>
                                                        </div>
                                                        <!-- <p class="btm-10"><a href="#">by <?php if(isset($coursess->user)): ?> <?php echo e($coursess->user->fname); ?>

                                                                <?php endif; ?></a></p> -->
                                                        <div class="rating">
                                                            <ul>
                                                                <li>
                                                                    <!-- star rating -->
                                                                    <?php 
                                                                        $learn = 0;
                                                                        $price = 0;
                                                                        $value = 0;
                                                                        $sub_total = 0;
                                                                        $sub_total = 0;
                                                                        $reviews = App\ReviewRating::where('course_id',$coursess->id)->where('status','1')->get();
                                                                    ?>
                                                                    <?php if(!empty($reviews[0])): ?>
                                                                    <?php
                                                                        $count =  App\ReviewRating::where('course_id',$coursess->id)->count();
                                
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
                                                                        <div class="star-ratings-sprite"><span
                                                                                style="width:<?php echo $ratings_var; ?>%"
                                                                                class="star-ratings-sprite-rating"></span>
                                                                        </div>
                                                                    </div>
                                                                    <?php else: ?>
                                                                    <div class="pull-left">
                                                                        <?php echo e(__('No Rating')); ?>

                                                                    </div>
                                                                    <?php endif; ?>
                                                                </li>
                                                                <!-- overall rating -->
                                                                <?php
                                                                $reviews = App\ReviewRating::where('course_id' ,$coursess->id)->get();
                                                                ?>
                                                                <?php 
                                                                    $learn = 0;
                                                                    $price = 0;
                                                                    $value = 0;
                                                                    $sub_total = 0;
                                                                    $count =  count($reviews);
                                                                    $onlyrev = array();
                                
                                                                    $reviewcount = App\ReviewRating::where('course_id', $coursess->id)->where('status',"1")->WhereNotNull('review')->get();
                                
                                                                    foreach($reviewcount as $review){
                                
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
                                                                $reviewsrating = App\ReviewRating::where('course_id', $coursess->id)->first();
                                                                ?>
                                                                <?php if(!empty($reviewsrating)): ?>
                                                                <!-- <li>
                                                                    <b><?php echo e(round($overallrating, 1)); ?></b>
                                                                </li> -->
                                                                <?php endif; ?>
                                
                                                                <li class="reviews">
                                                                    (<?php
                                                                    $data = App\ReviewRating::where('course_id', $coursess->id)->count();
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
                                
                                                        <div class="mycourse-progress">
                                
                                                            <?php
                                                                $progress = App\CourseProgress::where('course_id', $coursess->id)->where('user_id', Auth::User()->id)->first();
                                                            ?>
                                                            <?php if(!empty($progress)): ?>
                                
                                                            <?php
                                                                                
                                                                $total_class = $progress->all_chapter_id;
                                                                $total_count = count($total_class);
                                
                                                                $total_per = 100;
                                
                                                                $read_class = $progress->mark_chapter_id;
                                                                $read_count =  count($read_class);
                                
                                                                $progres = ($read_count/$total_count) * 100;
                                                            ?>
                                
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                                    style="width: <?php echo $progres; ?>%" aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="complete"><?php echo $progres; ?>% <?php echo e(__('Complete')); ?></div>
                                                            <?php else: ?>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                                    style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <div class="complete"><?php echo e(__('Start Course')); ?></div>
                                                            <?php endif; ?>
                                
                                                        </div>
                                
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> 
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
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/student/profile.blade.php ENDPATH**/ ?>