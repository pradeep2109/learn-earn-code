
<?php $__env->startSection('title', 'Watchlist'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section id="learning-courses" class="learning-courses-main-block">
    <div class="container-xl">

    	<h4 class="cart-heading">
    		<b>
    		<?php
                
                if(count($coursewatch)>0){

                    echo count($coursewatch);
                }
                else{

                    echo "0";
                }
            ?>
        	  <?php echo e(__('Courses')); ?> <?php echo e(__('in')); ?> <?php echo e(__('Watchlist')); ?>

        	</b>
        </h4>
        <div class="row">
        	<?php $__currentLoopData = $coursewatch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<?php if($wish->user_id == Auth::User()->id): ?>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="view-block">
                        <div class="view-img">
                            <?php if($wish->courses['preview_image'] !== NULL && $wish->courses['preview_image'] !== ''): ?>
                                <a href="<?php echo e(route('user.course.show',['id' => $wish->courses->id, 'slug' => $wish->courses->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$wish->courses->preview_image)); ?>" class="img-fluid" alt="course">
                            <?php else: ?>
                                <a href="<?php echo e(route('user.course.show',['id' => $wish->courses->id, 'slug' => $wish->courses->slug ])); ?>"><img src="<?php echo e(Avatar::create($wish->courses->title)->toBase64()); ?>" class="img-fluid" alt="course">
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class="view-dtl">
                            <div class="view-heading btm-10"><a href="<?php echo e(route('user.course.show',['id' => $wish->courses->id, 'slug' => $wish->courses->slug ])); ?>"><?php echo e(str_limit($wish->courses->title, $limit = 35, $end = '...')); ?></a></div>
                            <p class="btm-10"><a href="#"><?php echo e(__('by')); ?> <?php echo e($wish->courses->user->fname); ?></a></p>
                            <div class="rating">
                                <ul>
                                    <li>
                                        <?php 
                                        $learn = 0;
                                        $price = 0;
                                        $value = 0;
                                        $sub_total = 0;
                                        $sub_total = 0;
                                        $reviews = App\ReviewRating::where('course_id',$wish->courses->id)->where('status','1')->get();
                                        ?> 
                                        <?php if(!empty($reviews[0])): ?>
                                            <?php
                                            $count =  App\ReviewRating::where('course_id',$wish->courses->id)->count();

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
                                            <div class="pull-left">
                                                <?php echo e(__('No Rating')); ?>

                                            </div>
                                        <?php endif; ?>
                                    </li>

                                    <?php
                                    $reviews = App\ReviewRating::where('course_id' ,$wish->courses->id)->get();
                                    ?>
                                    <?php 
                                    $learn = 0;
                                    $price = 0;
                                    $value = 0;
                                    $sub_total = 0;
                                    $count =  count($reviews);
                                    $onlyrev = array();

                                    $reviewcount = App\ReviewRating::where('course_id', $wish->courses->id)->where('status',"1")->WhereNotNull('review')->get();

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
                                        $reviewsrating = App\ReviewRating::where('course_id', $wish->courses->id)->first();
                                    ?>
                                    <?php if(!empty($reviewsrating)): ?>
                                    <li>
                                        <b><?php echo e(round($overallrating, 1)); ?></b>
                                    </li>
                                    <?php endif; ?>
                                  
                                   
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <div class="wishlist-action">
                        <div class="row">
                        	<div class="col-md-6 col-6">
                               
                        	</div>
                        	<div class="col-md-6 col-6">
                                <div class="wishlist-btn txt-rgt">
                                    <form  method="post" action="<?php echo e(route('active.delete', $wish->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
            	                        <?php echo e(csrf_field()); ?>

            	                        
            	                      <button type="submit" class="btn btn-primary " title="<?php echo e(__('Remove')); ?>"><i class="fa fa-trash"></i></button>
            	                    </form>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/watchlist.blade.php ENDPATH**/ ?>