<!-- User Wallet checkout page start -->

<?php $__env->startSection('title', __('Checkout')); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- wallet-checkout-header start -->
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
                        <h1 class="wishlist-home-heading"><?php echo e(__('Wallet')); ?> <?php echo e(__('Checkout')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- wallet-checkout-header end -->

<!-- wallet checkout payment options start -->
<section id="checkout-block" class="checkout-main-block">
	<div class="container-xl">
		<div class="cart-items btm-30">
	        <div class="row">
	        	
	            <div class="col-lg-8 col-sm-8">
	            	<div class="checkout-pricelist">
		            	<ul>
		            		<?php if($gsetting['currency_swipe'] == 1): ?>
		            			<li><h1 class="checkout-total"><?php echo e(__('Total')); ?>: <i class="<?php echo e($currency->icon); ?>"></i><?php echo e(strip_tags($amount)); ?></h1></li>
		            			
		            		<?php else: ?>
		            			<li><h1 class="checkout-total"><?php echo e(__('Total')); ?>: <?php echo e(strip_tags($amount)); ?><i class="<?php echo e($currency->icon); ?>"></i></h1></li>

		            		<?php endif; ?>

		            		<?php
		            			if($amount != '' || $amount != 0){
		            				$mainpay = strip_tags(round($amount,2));
		            			}else{
		            				$mainpay = strip_tags(round($amount,2));
		            			}
		            		?>
		            		
		            	</ul>
	            	</div>
	            	<?php  			
        				$secureamount = Crypt::encrypt($mainpay);
        			?>
	            	<div class="payment-gateways">
	            		<div id="accordion" class="second-accordion">

	            			<?php if($wallet_settings->paypal_enable == 1): ?>
						    <div class="card">
	                            <div class="card-header" id="headingOne">
							        <div class="panel-title">
							            <label for='r11'>
								            <input type='radio' id='r11' name='occupation' value='<?php echo e(__("Working")); ?>' required />
								            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
								              
								            <img src="<?php echo e(url('images/payment/paypal2.png')); ?>" class="img-fluid" alt="course">
							            </label>
							        </div>
						    	</div>
							    <div id="collapseOne" class="panel-collapse collapse in">
							        <div class="card-body">
		                            
		                            	<div class="payment-proceed-btn">
		                            		<form action="<?php echo e(route('wallet.paypal')); ?>" method="POST" autocomplete="off">
		                            			<?php echo csrf_field(); ?>
		                            			
		                         				<input type="hidden" name="amount" value="<?php echo e(strip_tags($secureamount)); ?>"/>
		                            			<button class="btn btn-primary" title="<?php echo e(__('checkout')); ?>" type="submit"><?php echo e(__('Proceed')); ?></button>
		                            		</form>
		                            		
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>


							<?php if($wallet_settings->paytm_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingFour">
							        <div class="panel-title">
							            <label for='r17'>
							              <input type='radio' id='r17' name='occupation' value='<?php echo e(__("Working")); ?>' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"></a>
							              <img src="<?php echo e(url('images/payment/paytm.png')); ?>"  class="img-fluid" alt="course"> 
							            </label>
							        </div>
						    	</div>
							    <div id="collapseFour" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">
		                            		<form method="post" action="<?php echo e(route('wallet.paytm')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
		                            			<?php echo csrf_field(); ?>

										            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
										          
												    <div class="row">
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong><?php echo e(__('Name')); ?></strong>
											                <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e(Auth::user()->fname); ?>" required>
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong><?php echo e(__('Mobile Number')); ?></strong>
											                <input type="text" name="mobile" class="form-control" placeholder="<?php echo e(__('Enter Mobile Number')); ?>" value="<?php echo e(Auth::user()->mobile); ?>" required autocomplete="off">
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong><?php echo e(__('Email Id')); ?></strong>
											                <input type="email" name="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" placeholder="<?php echo e(__('Enter Email id')); ?>" required>
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <input type="hidden" name="amount" class="form-control" value="<?php echo e(strip_tags($mainpay)); ?>" readonly="">
											            </div>
											        </div>
											        <div class="col-md-12">
											            <button class="btn btn-primary" title="checkout" type="submit"><?php echo e(__('Proceed')); ?></button>
											        </div>
											    </div>
										          
											</form>
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>
							

							<?php if($wallet_settings->stripe_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingThree">
							        <div class="panel-title">
							            <label for='r13'>
							              <input type='radio' id='r13' name='occupation' value='<?php echo e(__("Working")); ?>' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"></a>
							              <img src="<?php echo e(url('images/payment/stripe.png')); ?>" class="img-fluid" alt="course">
							            </label>
							        </div>
						    	</div>
							    <div id="collapseThree" class="panel-collapse collapse in">
							        <div class="card-body">
								      
									    <div class="creditCardForm">
										  
										    <div class="payment">
										        <form accept-charset="UTF-8" action="<?php echo e(route('stripe.wallet')); ?>" method="POST"autocomplete="off">
										    		<?php echo e(csrf_field()); ?>

										            <div class="form-group owner">
										                <label for="owner"><?php echo e(__('Owner')); ?></label>
										                <input type="text" class="form-control" id="owner" required>
										            </div>
										            <div class="form-group CVV">
										                <label for="cvv"><?php echo e(__('CVV')); ?></label>
										                <input type="text" class="form-control" id="cvv" name="ccv" required>
										            </div>
										            <div class="form-group" id="card-number-field">
										                <label for="cardNumber"><?php echo e(__('Card Number')); ?></label>
										                <input type="text" class="form-control" id="cardNumber" name="card_no" required>
										            </div>
										            <div class="form-group" id="expiration-date">
										                <label><?php echo e(__('Expiration Date')); ?></label>
										                <select name="expiry_month" required> 
										                    <option value="01"><?php echo e(__('January')); ?></option>
										                    <option value="02"><?php echo e(__('February')); ?></option>
										                    <option value="03"><?php echo e(__('March')); ?></option>
										                    <option value="04"><?php echo e(__('April')); ?></option>
										                    <option value="05"><?php echo e(__('May')); ?></option>
										                    <option value="06"><?php echo e(__('June')); ?></option>
										                    <option value="07"><?php echo e(__('July')); ?></option>
										                    <option value="08"><?php echo e(__('August')); ?></option>
										                    <option value="09"><?php echo e(__('September')); ?></option>
										                    <option value="10"><?php echo e(__('October')); ?></option>
										                    <option value="11"><?php echo e(__('November')); ?></option>
										                    <option value="12"><?php echo e(__('December')); ?></option>
										                </select>
										                <select name="expiry_year" required>
										                    <option value="19"><?php echo e(__('2019')); ?></option>
										                    <option value="20"><?php echo e(__('2020')); ?></option>
										                    <option value="21"><?php echo e(__('2021')); ?></option>
										                    <option value="22"><?php echo e(__('2022')); ?></option>
										                    <option value="23"><?php echo e(__('2023')); ?></option>
										                    <option value="24"><?php echo e(__('2024')); ?></option>
										                    <option value="25"><?php echo e(__('2025')); ?></option>
										                    <option value="26"><?php echo e(__('2026')); ?></option>
										                    <option value="27"><?php echo e(__('2027')); ?></option>
										                    <option value="28"><?php echo e(__('2028')); ?></option>
										                    <option value="29"><?php echo e(__('2029')); ?></option>
										                    <option value="30"><?php echo e(__('2030')); ?></option>
										                    <option value="31"><?php echo e(__('2031')); ?></option>
										                    <option value="32"><?php echo e(__('2032')); ?></option>
										                </select>
										            </div>
										            <div class="form-group" id="credit_cards">
										                <img src="<?php echo e(url('images/payment/visa.jpg')); ?>" id="visa">
										                <img src="<?php echo e(url('images/payment/mastercard.jpg')); ?>" id="mastercard">
										                <img src="<?php echo e(url('images/payment/amex.jpg')); ?>" id="amex">
										            </div>

										            <input type="hidden" name="amount"  value="<?php echo e(strip_tags($mainpay)); ?>" />

										            <button class='form-control btn btn-default' type='submit'><?php echo e(__('Proceed')); ?></button>
										        </form>
										    </div>
										</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>



                        </div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!-- wallet checkout page end -->
<!-- script start-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>

<script src="<?php echo e(url('js/jquery.payform.min.js')); ?>" charset="utf-8"></script>
<script src="<?php echo e(url('js/script.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery.min.js')); ?>"></script>  

<?php $__env->stopSection(); ?>
<!-- script end -->

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/wallet/wallet_checkout.blade.php ENDPATH**/ ?>