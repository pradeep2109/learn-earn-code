
<?php $__env->startSection('title', 'Cart'); ?>
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
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="course" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('Shopping Cart')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- about-home end -->
<section id="cart-block" class="cart-main-block">
	<div class="container-xl">
		<div class="cart-items btm-30">
			<h4 class="cart-heading">
        		<?php
        			if(Auth::check())
        			{
        				$item = App\Cart::where('user_id', Auth::User()->id)->get();
        			}
        			else{

        			}
        			

                    if($item != NULL){

                        echo count($item);
                    }
                    else{

                        echo "0";
                    }
                ?>
            	
            	<?php echo e(__('Courses in Cart')); ?>

            </h4>
            <?php if($carts != NULL): ?>
		        <div class="row">
		            <div class="col-lg-9 col-md-9">
		            	<?php if(auth()->guard()->check()): ?>
	        			<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    				<div class="cart-add-block">
			                    <div class="row">
			                        <div class="col-lg-3 col-sm-6 col-5">
			                            <div class="cart-img">
			                            	<?php if($cart->course_id != NULL): ?>
				                            	<?php if($cart->courses['preview_image'] !== NULL && $cart->courses['preview_image'] !== ''): ?>
				                                	<a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->courses->slug ])); ?>"><img src="<?php echo e(asset('images/course/'. $cart->courses->preview_image)); ?>" class="img-fluid" alt="blog"></a>
				                                <?php else: ?>
				                                	<a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->courses->slug ])); ?>"><img src="<?php echo e(Avatar::create($cart->courses->title)->toBase64()); ?>" class="img-fluid" alt="blog"></a>
				                                <?php endif; ?>
			                                <?php else: ?>
				                                <?php if($cart->bundle['preview_image'] !== NULL && $cart->bundle['preview_image'] !== ''): ?>
				                                	<a href="<?php echo e(route('user.course.show',['id' => $cart->bundle->id, 'slug' => $cart->bundle->slug ])); ?>"><img src="<?php echo e(asset('images/bundle/'. $cart->bundle->preview_image)); ?>" class="img-fluid" alt="blog"></a>
				                                <?php else: ?>
				                                	<a href="<?php echo e(route('user.course.show',['id' => $cart->bundle->id, 'slug' => $cart->bundle->slug ])); ?>"><img src="<?php echo e(Avatar::create($cart->bundle->title)->toBase64()); ?>" class="img-fluid" alt="blog"></a>
				                                <?php endif; ?>
			                                <?php endif; ?>


			                            </div>
			                        </div>
			                        <div class="col-lg-5 col-sm-6 col-6">
			                        	<div class="cart-course-detail">
			                        		<?php if($cart->course_id != NULL): ?>
					                            <div class="cart-course-name"><a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->courses->slug ])); ?>"><?php echo e(str_limit($cart->courses->title, $limit = 50, $end = '...')); ?></a></div>

					                            <div class="cart-course-update"> <?php echo e($cart->courses->user->fname); ?></div>
				                            <?php else: ?>
					                            <div class="cart-course-name"><a href="<?php echo e(route('user.course.show',['id' => $cart->bundle->id, 'slug' => $cart->bundle->slug ])); ?>"><?php echo e(str_limit($cart->bundle->title, $limit = 50, $end = '...')); ?></a></div>

					                            <div class="cart-course-update"> <?php echo e($cart->bundle->user->fname); ?></div>
				                            <?php endif; ?>

				                        </div>
			                        </div>
			                        <div class="col-lg-2 col-sm-6 col-6">
			                            <div class="cart-actions float-right">
		                                    <span>
		                                    	<form id="cart-form" method="post" action="<?php echo e(url('removefromcart', $cart->id)); ?>" 
					                            	data-parsley-validate class="form-horizontal form-label-left">
					    	                        <?php echo e(csrf_field()); ?>

					    	                        
					    	                      <button  type="submit" class="cart-remove-btn display-inline" title="Remove From cart"><?php echo e(__('Remove')); ?></button>
					    	                    </form>
											</span>
											<span>
												<form id="wishlist-form" method="post" action="<?php echo e(url('show/wishlist', $cart->id )); ?>" data-parsley-validate class="form-horizontal form-label-left">
					                                <?php echo e(csrf_field()); ?>


					                                <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
					                                <input type="hidden" name="course_id"  value="<?php echo e($cart->course_id); ?>" />

					                                <button class="cart-wishlisht-btn" title="Remove to wishlist" type="submit"><?php echo e(__('Remove to Wishlist')); ?></button>
					                            </form>
											</span>
											
			                            </div>
			                        </div>
			                        <div class="col-lg-2 col-sm-6 col-6">
			                        	<div class="row float-right">
			                        		<div class="col-lg-10 col-10">
					                            <div class="cart-course-amount">
					                                <ul>
					                                	
			                                            <?php if($cart->offer_price == !NULL): ?>
			                                            	
			                                            	<li><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?><?php echo e(price_format(  currency($cart->offer_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false) )); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></li>

					                                    	<li><s><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?><?php echo e(price_format(   currency($cart->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></s></li>
					                                    	
					                                    <?php else: ?>
					                                    	
					                                    	<li><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?><?php echo e(price_format(   currency($cart->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></li>
					                                    <?php endif; ?>
					                                    
					                                </ul>
					                            </div>
					                        </div>
					                        <div class="col-lg-2 col-2">
					                        	<?php if($cart->disamount == !NULL): ?>
						                        	<?php if(Session::has('coupanapplied')): ?>
						                            <div class="cart-coupon">
				                    					<a href="" class="btn btn-link top" data-toggle="tooltip" data-placement="top" title="<?php echo e(Session::get('coupanapplied')['msg']); ?>"><i class="fa fa-tag"></i></a>
				                    				</div>
				                    				<?php endif; ?>
				                    			<?php endif; ?>
			                    			</div>
	                    				</div>
			                        </div>
			                    </div>
		                	</div>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    <?php endif; ?>

	                    <?php if(auth()->guard()->guest()): ?>
	        			<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        				<?php
	        				$cart = App\Course::where('id', $c)->where('status', '1')->first();
	        				?>
		    				<div class="cart-add-block">
			                    <div class="row no-gutters">
			                        <div class="col-lg-2 col-sm-6 col-5">
			                            <div class="cart-img">
			                            	
			                            	<?php if($cart->preview_image !== NULL && $cart->preview_image !== ''): ?>
			                                	<a href="<?php echo e(route('user.course.show',['id' => $cart->id, 'slug' => $cart->slug ])); ?>"><img src="<?php echo e(asset('images/course/'. $cart->preview_image)); ?>" class="img-fluid" alt="blog"></a>
			                                <?php else: ?>
			                                	<a href="<?php echo e(route('user.course.show',['id' => $cart->id, 'slug' => $cart->slug ])); ?>"><img src="<?php echo e(Avatar::create($cart->title)->toBase64()); ?>" class="img-fluid" alt="blog"></a>
			                                <?php endif; ?>

			                            </div>
			                        </div>
			                        <div class="col-lg-4 col-sm-6 col-6">
			                        	<div class="cart-course-detail">
			                        		
					                        <div class="cart-course-name"><a href="<?php echo e(route('user.course.show',['id' => $cart->id, 'slug' => $cart->slug ])); ?>"><?php echo e(str_limit($cart->title, $limit = 50, $end = '...')); ?></a></div>

					                        <div class="cart-course-update"> <?php echo e($cart->user->fname); ?></div>
				                            

				                        </div>
			                        </div>
			                        <div class="col-lg-2 offset-lg-1 col-sm-6 col-6">
			                            <div class="cart-actions">
		                                    <span>
												<form id="cart-form" method="post" action="<?php echo e(auth()->check() ? url('removefromcart', $cart->id) : route('guest.removefromcart', $cart->id)); ?>" 

													data-parsley-validate class="form-horizontal form-label-left">
					    	                        <?php echo e(csrf_field()); ?>

					    	                        
					    	                      <button  type="submit" class="cart-remove-btn display-inline" title="Remove From cart"><?php echo e(__('Remove')); ?></button>
					    	                    </form>
											</span>
											
											
			                            </div>
			                        </div>
			                        <div class="col-lg-3 col-sm-6 col-6">
			                        	<div class="row">
			                        		<div class="col-lg-10 col-10">
					                            <div class="cart-course-amount">
					                                <ul>
					                                	
			                                            <?php if($cart->discount_price == !NULL): ?>
			                                            	
					                                    	<li><?php echo e(currency($cart->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></li>

					                                    	<li><s><?php echo e(currency($cart->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></s></li>
					                                    	
					                                    <?php else: ?>
					                                    	
					                                    	<li><?php echo e(currency($cart->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></li>
					                                    	
					                                    <?php endif; ?>
					                                    
					                                </ul>
					                            </div>
					                        </div>
					                        <div class="col-lg-2 col-2">
					                        	<?php if($cart->disamount == !NULL): ?>
						                        	<?php if(Session::has('coupanapplied')): ?>
						                            <div class="cart-coupon">
				                    					<a href="" class="btn btn-link top" data-toggle="tooltip" data-placement="top" title="<?php echo e(Session::get('coupanapplied')['msg']); ?>"><i class="fa fa-tag"></i></a>
				                    				</div>
				                    				<?php endif; ?>
				                    			<?php endif; ?>
			                    			</div>
	                    				</div>
			                        </div>
			                    </div>
		                	</div>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    <?php endif; ?>
	                    <div class="container-xl" id="adsense">
					        <!-- google adsense code -->
					        <?php
					          if (isset($ad)) {
					           if ($ad->iscart==1 && $ad->status==1) {
					              $code = $ad->code;
					              echo html_entity_decode($code);
					           }
					          }
					        ?>
					    </div>
		            </div>
	                <div class="col-lg-3 col-md-3">
	                	<?php if(count($item)>0): ?>
		                	<div class="cart-total">
								<?php
									if(auth::check())
        							{
			                        	$cartitems = App\Cart::where('user_id', Auth::User()->id)->first();
			                        }
			                        else
			                        {
			                        	$cartitems = session()->get('cart.add_to_cart');
			                        }
			                    ?>
			                    <?php if($cartitems == NULL): ?>
			                        <?php echo e(__('empty')); ?>

			                    <?php else: ?>

			                    <div class="cart-price-detail">
			                		<h4 class="cart-heading"><?php echo e(__('Total')); ?>:</h4>
			                		<ul>
			                			
			                            <li><?php echo e(__('Total Price')); ?><span class="categories-count"><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?> <?php echo e(price_format(  currency($price_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></span></li>

			                            <li><?php echo e(__('Offer Discount')); ?><span class="categories-count">&nbsp;<?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?> <?php echo e(price_format(  currency($price_total - $offer_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></span></li>
			                            
			                            

			                            <li><?php echo e(__('Coupon Discount')); ?>

			                            	<?php if( $cpn_discount == !NULL): ?>
			                            		
			                            		<span class="categories-count">-&nbsp;<?php echo e(currency($cpn_discount, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?>  </span>
			                            		
			                            	<?php else: ?>
			                            		<span class="categories-count"><a href="#" data-toggle="modal" data-target="#myModalCoupon" title="report"><?php echo e(__('ApplyCoupon')); ?></a></span>
			                            	<?php endif; ?>
			                            </li>
			                            <li><?php echo e(__('Discount Percent')); ?><span class="categories-count"><?php echo e(round($offer_percent, 0)); ?>% <?php echo e(__('off')); ?></span></li>
			                            <hr>
			                            
			                            <li class="cart-total-two"><b><?php echo e(__('Total')); ?>:<span class="categories-count"><?php echo e(activeCurrency()->getData()->position == 'l'  ? activeCurrency()->getData()->symbol :''); ?> <?php echo e(price_format( currency($cart_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = false))); ?><?php echo e(activeCurrency()->getData()->position == 'r'  ? activeCurrency()->getData()->symbol :''); ?></b></span></li>
			                            
			                		</ul>
			                	</div>


			                    <div class="course-rate">
			                        
			                        
			                        <div class="checkout-btn">

			                        	<?php if(round($cart_total) == 0): ?>

			                        		<a href="<?php echo e(url('free/enroll',$cart_total)); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('Enroll Now')); ?></a>


			                     		<?php else: ?>


				                     		<?php if(auth::check()): ?>

				                        		<form id="cart-form" action="<?php echo e(url('gotocheckout')); ?>" data-parsley-validate class="form-horizontal form-label-left">
				                           
				    	                        <?php echo csrf_field(); ?>
												<?php
													session()->put('price_total',$price_total);
													session()->put('offer_total',$offer_total);
													session()->put('offer_percent',$offer_percent);
													session()->put('cart_total',$cart_total);
												?>
				    	                      
				    	                      
							                    
				    	                        
				    	                      <button class="btn btn-primary" title="checkout" type="submit"><?php echo e(__('Checkout')); ?></button>
				    	                    </form>
				    	                    <?php else: ?>
				                        		
				                        		<a href="<?php echo e(url('guest/register')); ?>" class="btn btn-primary" title="checkout" type="submit"><?php echo e(__('Checkout')); ?></a>
				                        	<?php endif; ?>



			                     		<?php endif; ?>

			                        	
			    	                    
			                    	</div>
			                    </div>
			                    <?php endif; ?>
								<hr>
								<?php if(auth()->guard()->check()): ?>
								<div class="coupon-apply">
									<form id="cart-form" method="post" action="<?php echo e(url('apply/coupon')); ?>" 
										data-parsley-validate class="form-horizontal form-label-left">
										<?php echo e(csrf_field()); ?>


										<div class="row no-gutters">
											<div class="col-lg-9 col-9">
												<input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
												<input type="text" name="coupon" value="" placeholder="Enter Coupon" />
											</div>
											<div class="col-lg-3 col-3">
												<button data-purpose="coupon-submit" type="submit" class="btn btn-primary"><span><?php echo e(__('Apply')); ?></span></button>
											</div>
										</div>
									</form>
								</div>
								<?php endif; ?>

								<?php if(Session::has('fail')): ?>
									<div class="alert alert-danger alert-dismissible fade show">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<?php echo e(Session::get('fail')); ?>

									</div>
								<?php endif; ?>
								<?php if(Session::has('coupanapplied')): ?>
									<form id="demo-form2" method="post" action="<?php echo e(route('remove.coupon', Session::get('coupanapplied')['cpnid'])); ?>">
										<?php echo e(csrf_field()); ?>

											
										<div class="remove-coupon">
										<button type="submit" class="btn btn-primary" title="Remove Coupon"><i class="fa fa-times icon-4x" aria-hidden="true"></i></button>
										</div>
									</form>
									<div class="coupon-code">   
										<?php echo e(Session::get('coupanapplied')['msg']); ?>

									</div>
								<?php endif; ?>
								
							</div>
		                <?php endif; ?>
	                </div>
		        </div>
		    <?php else: ?>
		    	<div class="cart-no-result">
		    		<i class="fa fa-shopping-cart"></i>
			    	<div class="no-result-courses btm-10"><?php echo e(__('cart empty')); ?></div>
			    	<div class="recommendation-btn text-white text-center">
		                <a href="<?php echo e(url('/')); ?>" class="btn btn-primary" title="Keep Shopping"><b><?php echo e(__('Keep Shopping')); ?></b></a>
		            </div> 
				</div>
		    <?php endif; ?>
	    </div>
	</div>

	<!--Model start-->
	<?php if(auth()->guard()->check()): ?>
	<div class="modal fade" id="myModalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-md" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 class="modal-title" id="myModalLabel"><?php echo e(__('Coupon Code')); ?></h4>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        </div>
	        <div class="box box-primary">
	          <div class="panel panel-sum">
	            <div class="modal-body">
	            	<div class="coupon-apply">
						<form id="cart-form" method="post" action="<?php echo e(url('apply/coupon')); ?>" 
	                    	data-parsley-validate class="form-horizontal form-label-left">
	                        <?php echo e(csrf_field()); ?>

	                        
		                	<div class="row no-gutters">
		                		<div class="col-lg-9 col-9">
		                			<input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
	                    			<input type="text" name="coupon" value="" placeholder="Enter Coupon" />
	                    		</div>
	                    		<div class="col-lg-3 col-3">
	                    			<button data-purpose="coupon-submit" type="submit" class="btn btn-primary"><span><?php echo e(__('Apply')); ?></span></button>
	                    		</div>
	                    	</div>
	                    </form>
	                </div>
	                <hr>
	                <?php if($item != NULL): ?>
	                <div class="available-coupon">
	                	<?php
	                		$cpns = App\Coupon::get();
	                		$mytime = Carbon\Carbon::now();
	                	?>

	                	<?php $__currentLoopData = $cpns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cpn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<?php if($cpn->expirydate >= $mytime && $cpn->show_to_users == 1): ?>
	                		<ul>
	                			<li><?php echo e($cpn->code); ?></li>
	                		</ul>
	                		<?php endif; ?>
	                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                	
	                </div>
	                <?php endif; ?>


	            </div>
	          </div>
	        </div>
	      </div>
	    </div> 
	</div>
	<?php endif; ?>
	<!--Model close -->
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/cart.blade.php ENDPATH**/ ?>