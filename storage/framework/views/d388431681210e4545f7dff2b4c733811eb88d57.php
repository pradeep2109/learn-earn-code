
<?php $__env->startSection('title', "Course Completion Certificate"); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="cirtificate" class="course-cirtificate">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div id="printableArea" class="certificate-responsive">
                    <?php if(Module::has('Certificate') && Module::find('Certificate')->isEnabled()): ?>
                        <?php echo $__env->make('certificate::front.certificate_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                    <div class="cirtificate-border-one text-center">
                        <div class="cirtificate-border-two">
                        <div class="cirtificate-heading" style=""> <?php echo e(__('Certificate of Completion')); ?></div>
                            <?php
                                $mytime = Carbon\Carbon::now();
                            ?>
                        <p class="cirtificate-detail" style="font-size:30px"> <?php echo e(__('This is to certify that')); ?>

                                <b>&nbsp;<?php echo e($progress->user['fname']); ?>&nbsp;<?php echo e($progress->user['lname']); ?></b>  
                                <?php echo e(__('successfully completed')); ?> 
                                <b><?php echo e($course['title']); ?></b> 
                                <?php echo e(__('online course on')); ?> <br>
                                <span style="font-size:25px"><?php echo e(date('jS F Y', strtotime($progress['updated_at']))); ?></span>
                            </p>

                        <span class="cirtificate-instructor"><?php echo e(($course->user['fname'])); ?> <?php echo e(($course->user['lname'])); ?></span>
                        <br>
                        <span class="cirtificate-one"><?php echo e(($course->user['fname'])); ?> <?php echo e(($course->user['lname'])); ?>, <?php echo e(__('Instructor')); ?></span>
                        <br>
                        <span>&</span>
                            <div class="cirtificate-logo">
                            <?php if($gsetting['logo_type'] == 'L'): ?>
                                <img src="<?php echo e(asset('images/logo/'.$gsetting['logo'])); ?>" class="img-fluid" alt="<?php echo e(__('logo')); ?>">
                            <?php else: ?>
                                <a href="<?php echo e(url('/')); ?>"><b><div class="logotext"><?php echo e($gsetting['project_title']); ?></div></b></a>
                            <?php endif; ?>
                            </div>
                            

                            <div class="cirtificate-serial"><?php echo e(__('Certificate no.')); ?> :<?php echo e($serial_no); ?></div>
                            <div class="cirtificate-serial"><?php echo e(__('Certificate url.')); ?> :<?php echo e(url()->full()); ?></div>
                        
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <h4><?php echo e(__('Certificate Recipient')); ?>:</h4>
                <div class="recipient-block">
                    <div class="row">
                        <div class="col-md-4 col-4">
            
                            <?php if($progress->user->user_img != null || $progress->user->user_img !=''): ?>
                                <img src="<?php echo e(asset('images/user_img/'.$progress->user->user_img)); ?>" alt="<?php echo e(__('user')); ?>" class="img-fluid img-circle">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/default/user.jpg')); ?>" alt="<?php echo e(__('user')); ?>" class="img-fluid img-circle">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-8 col-8">
                            <?php echo e($progress->user->fname); ?>

                        </div>
                    </div>
                </div>

                <h4><?php echo e(__('About the Course')); ?>:</h4>
                <div class="view-block btm-20">
                    <div class="view-img">
                        <?php if($course['preview_image'] !== NULL && $course['preview_image'] !== ''): ?>
                            <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$course['preview_image'])); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid"></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(Avatar::create($course->title)->toBase64()); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid"></a>
                        <?php endif; ?>
                    </div>
                    <div class="view-dtl">
                        <div class="view-heading"><a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><?php echo e(str_limit($course->title, $limit = 30, $end = '...')); ?></a></div>
                        <div class="user-name">
                            <h6><?php echo e(__('By')); ?> <span><?php echo e(optional($course->user)['fname']); ?></span></h6>
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
                                    $reviews = App\ReviewRating::where('course_id',$course->id)->get();
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
                                <!-- overall rating-->
                                <?php 
                                $learn = 0;
                                $price = 0;
                                $value = 0;
                                $sub_total = 0;
                                $count =  count($reviews);
                                $onlyrev = array();

                                $reviewcount = App\ReviewRating::where('course_id', $course->id)->WhereNotNull('review')->get();

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
                                    $reviewsrating = App\ReviewRating::where('course_id', $course->id)->first();
                                ?>
                                <li class="reviews">
                                    (<?php
                                    $data = App\ReviewRating::where('course_id', $course->id)->count();
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
                            <?php if( $course->type == 1): ?>
                                <div class="rate text-right">
                                    <ul>

                                        <?php if($course->discount_price == !NULL): ?>
                                           
                                            <li><a><b><?php echo e(currency($course->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                            <li><a><b><strike><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                            
                                        <?php else: ?>
                                            
                                            <li><a><b><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                            
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
                <div class="download-btn btm-20">
                    <?php
                            
                        $parameter= Crypt::encrypt($course->id);
                    ?>

                    <?php
                    $random = $progress->id.'CR-'.uniqid();
                    ?>

                    <?php if(Module::has('Certificate') && Module::find('Certificate')->isEnabled()): ?>
                        <?php echo $__env->make('certificate::front.download_link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php else: ?>

                        <a href="" onclick="printDiv('printableArea')"  target="_blank"  class="btn btn-secondary"><?php echo e(__('Print Certificate')); ?></a>

                    <?php endif; ?>
                </div>
                <?php if(auth()->guard()->check()): ?>
                <p><a href="#" data-toggle="modal" data-target="#myModalCirtificate" title="<?php echo e(__('report')); ?>"><?php echo e(__('Updateyourcertificate')); ?></a> <?php echo e(__('withy our correct name')); ?>.</p>
                <div class="modal fade" id="myModalCirtificate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel"><?php echo e(__('Update You Certificate')); ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        
                        <div class="box box-primary">
                          <div class="panel panel-sum">
                            <div class="modal-body">
                                 <?php echo e(__('Confirm your name is')); ?> <b><?php echo e(Auth::User()->fname); ?></b>
                                <br>

                                 <?php echo e(__('Incorrect')); ?>? <a href="<?php echo e(route('profile.show',Auth::User()->id)); ?>"><?php echo e(__('Update your profile name')); ?></a>.
                           
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div> 
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/certificate/certificate.blade.php ENDPATH**/ ?>