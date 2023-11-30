
<?php $__env->startSection('title', 'API Setting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'API Setting';
$data['title'] = 'Setting';
$data['title1'] = 'API Setting';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <div class="row">
        <?php if($errors->any()): ?>  
            <div class="alert alert-danger" role="alert">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                    <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="color:red;">&times;</span></button></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </div>
        <?php endif; ?>
        
        <div class="col-md-3">
             <div class="card dashboard-card p-3 mb-5">
                <div class="scroll-down api-setting-page">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="<?php echo e(url('images/payment/api_setting/stripe.png')); ?>" class="img-fluid" width="60px" height="60px" alt=""></a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/paypal.png')); ?>" class="img-fluid" width="70px" height="70px" alt=""></a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/instamojo.png')); ?>" class="img-fluid" width="90px" height="90px" alt=""></a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/razorpay.png')); ?>" class="img-fluid" width="90px" height="90px" alt=""></a>
                        <a class="nav-link" id="v-pills-PayStack-tab" data-toggle="pill" href="#v-pills-PayStack" role="tab" aria-controls="v-pills-PayStack" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/paystack.png')); ?>" class="img-fluid" width="90px" height="90px" alt=""></a>
                        <a class="nav-link" id="v-pills-Paytm-tab" data-toggle="pill" href="#v-pills-Paytm" role="tab" aria-controls="v-pills-Paytm" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/paytm.png')); ?>" class="img-fluid" width="60px" height="60px" alt=""></a>
                        <a class="nav-link" id="v-pills-ReCaptcha-tab" data-toggle="pill" href="#v-pills-ReCaptcha" role="tab" aria-controls="v-pills-ReCaptcha" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/recaptcha.png')); ?>" class="img-fluid" width="25px" height="25px" alt=""></a>
                        <a class="nav-link" id="v-pills-AWS-tab" data-toggle="pill" href="#v-pills-AWS" role="tab" aria-controls="v-pills-AWS" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/aws.png')); ?>" class="img-fluid" width="40px" height="40px" alt=""></a>
                        <a class="nav-link" id="v-pills-Omise-tab" data-toggle="pill" href="#v-pills-Omise" role="tab" aria-controls="v-pills-Omise" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/omise.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-PayUBiz-tab" data-toggle="pill" href="#v-pills-PayUBiz" role="tab" aria-controls="v-pills-PayUBiz" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/PayUbiz.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-Moli-tab" data-toggle="pill" href="#v-pills-Moli" role="tab" aria-controls="v-pills-Moli" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/moli.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-Cashfree-tab" data-toggle="pill" href="#v-pills-Cashfree" role="tab" aria-controls="v-pills-Cashfree" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/cashfree.png')); ?>" class="img-fluid" width="90px" height="90px" alt=""></a>
                        <a class="nav-link" id="v-pills-Skrill-tab" data-toggle="pill" href="#v-pills-Skrill" role="tab" aria-controls="v-pills-Skrill" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/skrill.png')); ?>" class="img-fluid" width="60px" height="60px" alt=""></a>
                        <a class="nav-link" id="v-pills-FlutterRave-tab" data-toggle="pill" href="#v-pills-FlutterRave" role="tab" aria-controls="v-pills-FlutterRave" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/rave.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-Payhere-tab" data-toggle="pill" href="#v-pills-Payhere" role="tab" aria-controls="v-pills-Payhere" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/payhere.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-Iyzipay-tab" data-toggle="pill" href="#v-pills-Iyzipay" role="tab" aria-controls="v-pills-Iyzipay" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/iyzico.png')); ?>" class="img-fluid" width="70px" height="70px" alt=""></a>
                        <a class="nav-link" id="v-pills-SSLCommerze-tab" data-toggle="pill" href="#v-pills-SSLCommerze" role="tab" aria-controls="v-pills-SSLCommerze" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/ssl.png')); ?>" class="img-fluid" width="110px" height="110px" alt=""></a>
                        <a class="nav-link" id="v-pills-Youtube-tab" data-toggle="pill" href="#v-pills-Youtube" role="tab" aria-controls="v-pills-Youtube" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/youtube.png')); ?>" class="img-fluid" width="60px" height="60px" alt=""></a>
                        <a class="nav-link" id="v-pills-Vimeo-tab" data-toggle="pill" href="#v-pills-Vimeo" role="tab" aria-controls="v-pills-Vimeo" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/Vimeo.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-Aamar-tab" data-toggle="pill" href="#v-pills-Aamar" role="tab" aria-controls="v-pills-Aamar" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/aamarpay.png')); ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                        <a class="nav-link" id="v-pills-BrainTree-tab" data-toggle="pill" href="#v-pills-BrainTree" role="tab" aria-controls="v-pills-BrainTree" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/braintree.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <a class="nav-link" id="v-pills-Google-tab" data-toggle="pill" href="#v-pills-Google" role="tab" aria-controls="v-pills-Google" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/google_tag.png')); ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                        <a class="nav-link" id="v-pills-Payflexi-tab" data-toggle="pill" href="#v-pills-Payflexi" role="tab" aria-controls="v-pills-Payflexi" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/payflexi.png')); ?>" class="img-fluid" width="90px" height="90px" alt=""></a>
                        <?php if(Module::has('Esewa') && Module::find('Esewa')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-Esewa-tab" data-toggle="pill" href="#v-pills-Esewa" role="tab" aria-controls="v-pills-Esewa" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/esewa.png')); ?>" class="img-fluid" width="70px" height="70px" alt=""></a>
                        <?php endif; ?>
                        
                        <?php if(Module::has('Smanager') && Module::find('Smanager')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-Smanager-tab" data-toggle="pill" href="#v-pills-Smanager" role="tab" aria-controls="v-pills-Smanager" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/smanager.png')); ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('Paytab') && Module::find('Paytab')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-Paytab-tab" data-toggle="pill" href="#v-pills-Paytab" role="tab" aria-controls="v-pills-Paytab" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/paytabs.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('DPOPayment') && Module::find('DPOPayment')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-DPOPayment-tab" data-toggle="pill" href="#v-pills-DPOPayment" role="tab" aria-controls="v-pills-DPOPayment" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/dpo.png')); ?>" class="img-fluid" width="70px" height="70px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('AuthorizeNet') && Module::find('AuthorizeNet')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-AuthorizeNet-tab" data-toggle="pill" href="#v-pills-AuthorizeNet" role="tab" aria-controls="v-pills-AuthorizeNet" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/authorize_net.png')); ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('Bkash') && Module::find('Bkash')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-Bkash-tab" data-toggle="pill" href="#v-pills-Bkash" role="tab" aria-controls="v-pills-Bkash" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/bksh.png')); ?>" class="img-fluid" width="70px" height="70px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('Midtrains') && Module::find('Midtrains')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-Midtrains-tab" data-toggle="pill" href="#v-pills-Midtrains" role="tab" aria-controls="v-pills-Midtrains" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/midtrans-logo.png')); ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('SquarePay') && Module::find('SquarePay')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-SquarePay-tab" data-toggle="pill" href="#v-pills-SquarePay" role="tab" aria-controls="v-pills-SquarePay" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/square.png')); ?>" class="img-fluid" width="80px" height="80px" alt=""></a>
                        <?php endif; ?>

                        <?php if(Module::has('Worldpay') && Module::find('Worldpay')->isEnabled()): ?>
                            <a class="nav-link" id="v-pills-Worldpay-tab" data-toggle="pill" href="#v-pills-Worldpay" role="tab" aria-controls="v-pills-Worldpay" aria-selected="false"><img src="<?php echo e(url('images/payment/api_setting/worldpay.png')); ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                        <?php endif; ?>
                        <?php if(Module::has('Onepay') && Module::find('Onepay')->isEnabled()): ?>
                        <?php echo $__env->make('onepay::admin.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 mb-3">
            <form action="<?php echo e(route('api.update')); ?>" class="mb-4" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('POST')); ?>

                <div class="card dashboard-card p-3">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('STRIPE PAYMENT')); ?></label><br>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch1" name="stripe_check" <?php echo e($gsetting->stripe_enable==1 ? 'checked' : ''); ?> />
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="STRIPE_KEY"><?php echo e(__('Stripe Key')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['STRIPE_KEY']); ?>" autofocus name="STRIPE_KEY" type="text" class="form-control" placeholder="Enter Stripe Key"/>
                                </div>
                                </div>
                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="s_secretkey"><?php echo e(__('Stripe Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['STRIPE_SECRET']); ?>" autofocus name="STRIPE_SECRET" type="text" class="form-control" placeholder="Enter Stripe Secret Key"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                        <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_enable"><?php echo e(__('PAYPAL PAYMENT')); ?></label><br>
                                        
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch2" name="paypal_check" <?php echo e($gsetting->paypal_enable==1 ? 'checked' : ''); ?> />
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_cid"><?php echo e(__('Paypal Client ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYPAL_CLIENT_ID']); ?>" autofocus name="PAYPAL_CLIENT_ID" type="text" class="form-control" placeholder="Enter Paypal Client ID"/>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_sid"><?php echo e(__('Paypal Secret ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYPAL_SECRET']); ?>" autofocus name="PAYPAL_SECRET" type="text" class="form-control" placeholder="Enter Paypal Secret ID"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="pay_mode"><?php echo e(__('Paypal Mode')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['PAYPAL_MODE']); ?>" autofocus name="PAYPAL_MODE" type="text" class="form-control" placeholder="Enter Paypal Mode"/>
                                    <small class="text-info"><i class="fa fa-question-circle"></i> For Test use <b>"sandbox"</b> and for Live use <b>"live"</b></small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                                
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_enable"><?php echo e(__('INSTA MOJO PAYMENT')); ?></label><br>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch3" name="instamojo_check" <?php echo e($gsetting->instamojo_enable==1 ? 'checked' : ''); ?> />
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_cid"><?php echo e(__('Insta Mojo Api Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['IM_API_KEY']); ?>" autofocus name="IM_API_KEY" type="text" class="form-control" placeholder="Enter InstaMojo Api Key"/>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_sid"><?php echo e(__('Insta Mojo Auth Token')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['IM_AUTH_TOKEN']); ?>" autofocus name="IM_AUTH_TOKEN" type="text" class="form-control" placeholder="Enter InstaMojo Auth Token"/>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_mode"><?php echo e(__('Insta Mojo URL')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['IM_URL']); ?>" autofocus name="IM_URL" type="text" class="form-control" placeholder="Enter InstaMojo Url"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> For Test use <b>https://test.instamojo.com/api/1.1/</b> <br>
                                        <i class="fa fa-question-circle"></i> For Live use <b>https://www.instamojo.com/api/1.1/</b></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_mode"><?php echo e(__('Insta Mojo Refund URL ')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['IM_REFUND_URL']); ?>" autofocus name="IM_REFUND_URL" type="text" class="form-control" placeholder="Enter InstaMojo Url"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> For Test use <b>https://test.instamojo.com/api/1.1/refunds/</b> <br>
                                        <i class="fa fa-question-circle"></i> For Live use <b>https://instamojo.com/api/1.1/refunds/</b></small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 ">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="razorpay_enable"><?php echo e(__('RAZOR PAY PAYMENT')); ?></label><br>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch4" name="razor_check" <?php echo e($gsetting->razorpay_enable==1 ? 'checked' : ''); ?> />
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_KEY"><?php echo e(__('Razorpay Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['RAZORPAY_KEY']); ?>" autofocus name="RAZORPAY_KEY" type="text" class="form-control" placeholder="Enter Razorpay Key"/>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_SECRET"><?php echo e(__('Razorpay Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['RAZORPAY_SECRET']); ?>" autofocus name="RAZORPAY_SECRET" type="text" class="form-control" placeholder="Enter Razorpay Secret Key"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-PayStack" role="tabpanel" aria-labelledby="v-pills-PayStack-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="paystack_enable"><?php echo e(__('PAYSTACK PAYMENT')); ?></label><br>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch5" name="paystack_check" <?php echo e($gsetting->paystack_enable==1 ? 'checked' : ''); ?> />
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_KEY"><?php echo e(__('PayStack Public Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYSTACK_PUBLIC_KEY']); ?>" autofocus name="PAYSTACK_PUBLIC_KEY" type="text" class="form-control" placeholder="Enter Paystack Public Key"/>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_SECRET"><?php echo e(__('PayStack Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYSTACK_SECRET_KEY']); ?>" autofocus name="PAYSTACK_SECRET_KEY" type="text" class="form-control" placeholder="Enter Paystack Secret Key"/>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_KEY"><?php echo e(__('PayStack Payment Url')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYSTACK_PAYMENT_URL']); ?>" autofocus name="PAYSTACK_PAYMENT_URL" type="text" class="form-control" placeholder="Enter Paystack Payment URL"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('use')); ?> <b>https://api.paystack.co</b> </small>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_SECRET"><?php echo e(__('PayStack Merchant Email')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYSTACK_MERCHANT_EMAIL']); ?>" autofocus name="PAYSTACK_MERCHANT_EMAIL" type="text" class="form-control" placeholder="Enter Paystack Merchant Email"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('use')); ?> <b><?php echo e(__('Paystack email')); ?></b> </small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAZORPAY_SECRET"><?php echo e(__('Paystack Callback URL')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(url('callback')); ?>" autofocus type="text" class="form-control" placeholder="" disabled/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('use')); ?> <b><?php echo e(__('this callback url in Paystack account')); ?></b> </small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Paytm" role="tabpanel" aria-labelledby="v-pills-Paytm-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="s_enable"><?php echo e(__('PAYTM PAYMENT')); ?></label>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch6" name="paytm_check" <?php echo e($gsetting->paytm_enable==1 ? 'checked' : ''); ?> />
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="text-dark" for="PAYTM_ENVIRONMENT"><?php echo e(__('Paytm Enviroment')); ?> <span class="text-danger">*</span></label>
                                    <small class="text-info"><i class="fa fa-question-circle"></i> For Test use <b>"local"</b> and for Live use <b>"production"</b></small>
                                    <input value="<?php echo e($env_files['PAYTM_ENVIRONMENT']); ?>" autofocus name="PAYTM_ENVIRONMENT" type="text" class="form-control" placeholder="Enter Paytm Enviroment"/>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6 form-group">
                                    <label class="text-dark" for="PAYTM_MERCHANT_ID"><?php echo e(__('Paytm Merchant ID')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['PAYTM_MERCHANT_ID']); ?>" autofocus name="PAYTM_MERCHANT_ID" type="text" class="form-control" placeholder="Enter Paytm Merchant Id"/>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="text-dark" for="PAYTM_MERCHANT_KEY"><?php echo e(__('Paytm Merchant Key')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['PAYTM_MERCHANT_KEY']); ?>" autofocus name="PAYTM_MERCHANT_KEY" type="text" class="form-control" placeholder="Enter Paytm Merchant Key"/>
                                </div>
                                    
                                


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYTM_MERCHANT_WEBSITE"><?php echo e(__('Paytm Merchant Website')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYTM_MERCHANT_WEBSITE']); ?>" autofocus name="PAYTM_MERCHANT_WEBSITE" type="text" class="form-control" placeholder="Enter Paytm Merchant Website"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYTM_CHANNEL"><?php echo e(__('Paytm Channel')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYTM_CHANNEL']); ?>" autofocus name="PAYTM_CHANNEL" type="text" class="form-control" placeholder="Enter Paytm Channel"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYTM_INDUSTRY_TYPE"><?php echo e(__('Paytm Industry Type')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYTM_INDUSTRY_TYPE']); ?>" autofocus name="PAYTM_INDUSTRY_TYPE" type="text" class="form-control" placeholder="Enter Paytm Industry Type"/>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-ReCaptcha" role="tabpanel" aria-labelledby="v-pills-ReCaptcha-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="s_enable"><?php echo e(__('Re Captcha')); ?></label><br>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch7" name="captcha_check" <?php echo e($gsetting->captcha_enable == 1 ? 'checked' : ''); ?> />
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="text-dark" for="PAYTM_CHANNEL"><?php echo e(__('Captcha SiteKey')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['NOCAPTCHA_SITEKEY']); ?>" autofocus name="NOCAPTCHA_SITEKEY" type="text" class="form-control" placeholder="Enter Captcha Site Key"/>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYTM_INDUSTRY_TYPE"><?php echo e(__('Captcha Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['NOCAPTCHA_SECRET']); ?>" autofocus name="NOCAPTCHA_SECRET" type="text" class="form-control" placeholder="Enter Captcha Secret Key"/>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-AWS" role="tabpanel" aria-labelledby="v-pills-AWS-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="aws_enable"><?php echo e(__('AWS Settings')); ?></label>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch8" name="aws_check" <?php echo e($gsetting->aws_enable == 1 ? 'checked' : ''); ?> />
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AWS_ACCESS_KEY_ID"><?php echo e(__('AWS Access KeyID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['AWS_ACCESS_KEY_ID']); ?>" autofocus name="AWS_ACCESS_KEY_ID" type="text" class="form-control" placeholder="Enter AWS Access Key Id"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AWS_SECRET_ACCESS_KEY"><?php echo e(__('AWS Secret Access Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['AWS_SECRET_ACCESS_KEY']); ?>" autofocus name="AWS_SECRET_ACCESS_KEY" type="text" class="form-control" placeholder="Enter AWS Secret Access Key"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AWS_DEFAULT_REGION"><?php echo e(__('AWS Default Region')); ?> <span class="text-danger">*</span></label>
                                        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="eg:ap-south-1"></i>
                                        <input value="<?php echo e($env_files['AWS_DEFAULT_REGION']); ?>" autofocus name="AWS_DEFAULT_REGION" type="text" class="form-control" placeholder="Enter AWS Default Region"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AWS_BUCKET"><?php echo e(__('AWS Bucket Name')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['AWS_BUCKET']); ?>" autofocus name="AWS_BUCKET" type="text" class="form-control" placeholder="Enter AWS Bucket Name"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AWS_URL"><?php echo e(__('AWS URL')); ?> <span class="text-danger">*</span></label>
                                        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="eg:https://bucket-name.s3.Region.amazonaws.com/"></i>
                                        <input value="<?php echo e($env_files['AWS_URL']); ?>" autofocus name="AWS_URL" type="text" class="form-control" placeholder="Enter AWS URL eg:https://bucket-name.s3.Region.amazonaws.com/"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i>  eg: https://Region.amazonaws.com/bucket-name/</small>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Omise" role="tabpanel" aria-labelledby="v-pills-Omise-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="enable_omise"><?php echo e(__('Omise Payment Setting')); ?></label><br>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch9" name="enable_omise" <?php echo e($gsetting->enable_omise == 1 ? 'checked' : ''); ?> />
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="OMISE_PUBLIC_KEY"><?php echo e(__('OMISE PUBLIC KEY')); ?><sup
                                                class="redstar">*</sup></label>
                                        <input value="<?php echo e(env('OMISE_PUBLIC_KEY')); ?>" autofocus
                                            name="OMISE_PUBLIC_KEY" type="text" class="form-control"
                                            placeholder="Enter omise app public key" />
                                    </div>
                                </div>
                                

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="OMISE_SECRET_KEY"><?php echo e(__('Omise Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('OMISE_SECRET_KEY')); ?>" autofocus
                                            name="OMISE_SECRET_KEY" type="text" class="form-control"
                                            placeholder="Enter omise secret key" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="OMISE_API_VERSION"><?php echo e(__('OMISE API VERSION')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('OMISE_API_VERSION')); ?>" autofocus
                                            name="OMISE_API_VERSION" type="text" class="form-control"
                                            placeholder="Enter omise api version" />
                                        <small class="text-info">
                                            • Check API VERSION <a
                                                href="https://dashboard.omise.co/api-version/edit">HERE</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-PayUBiz" role="tabpanel" aria-labelledby="v-pills-PayUBiz-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="s_enable"><?php echo e(__('PayUBiz/Money Payment Setting')); ?></label>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch10" name="enable_payu" <?php echo e($gsetting->enable_payu == 1 ? 'checked' : ''); ?> />
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYU_DEFAULT"><?php echo e(__('PAYU DEFAULT')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('PAYU_DEFAULT')); ?>" autofocus name="PAYU_DEFAULT"
                                            type="text" class="form-control" placeholder="Choose Payu Enviroment" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Choose')); ?>

                                            <b>"payubiz"</b> or <b>"payumoney"</b> option</small>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYU_METHOD"><?php echo e(__('PAYU METHOD')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('PAYU_METHOD')); ?>" autofocus name="PAYU_METHOD"
                                            type="text" class="form-control"
                                            placeholder="Choose PAYU METHOD Enviroment" />

                                        <small class="text-info"><i class="fa fa-question-circle"></i><?php echo e(__(' For Test use')); ?>

                                            <b>"test"</b> <?php echo e(__('and for Live use')); ?> <b>"secure"</b> <?php echo e(__('method')); ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYU_MERCHANT_KEY"><?php echo e(__('PAYU MERCHANT KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('PAYU_MERCHANT_KEY')); ?>" autofocus
                                            name="PAYU_MERCHANT_KEY" type="text" class="form-control"
                                            placeholder="Enter PAYU MERCHANT KEY" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Enter Payu
                                            Merchant key.')); ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYU_MERCHANT_SALT"><?php echo e(__('PAYU MERCHANT SALT')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('PAYU_MERCHANT_SALT')); ?>" autofocus
                                            name="PAYU_MERCHANT_SALT" type="text" class="form-control"
                                            placeholder="Enter PAYU MERCHANT SALT" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Enter Payu
                                            Merchant salt key.')); ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYU_AUTH_HEADER"><?php echo e(__('PAYU AUTH HEADER')); ?></label>
                                        <input value="<?php echo e(env('PAYU_AUTH_HEADER')); ?>" autofocus
                                            name="PAYU_AUTH_HEADER" type="text" class="form-control"
                                            placeholder="Enter PAYU AUTH HEADER" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i><?php echo e(__(' Required if
                                            method is')); ?> <b><?php echo e(__('Payumoney')); ?></b></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="payu_money"><?php echo e(__('PayU Money Account ?')); ?> <span class="text-danger">*</span></label><br>
                                        <input type="checkbox" class="custom_toggle" id="customSwitch11" name="payu_money" <?php echo e(env('PAYU_MONEY_TRUE') == true ? 'checked' : ''); ?> />
                                        <input type="hidden" name="free" value="0" for="status" id="customSwitch11">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Moli" role="tabpanel" aria-labelledby="v-pills-Moli-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Moli Payment Setting')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch12" name="enable_moli" <?php echo e($gsetting->enable_moli == 1 ? 'checked' : ''); ?> />
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="MOLLIE_KEY"><?php echo e(__('MOLI API KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('MOLLIE_KEY')); ?>" autofocus name="MOLLIE_KEY"
                                            type="text" class="form-control" placeholder="Enter Moli Api Key" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Enter Moli
                                            Api Key')); ?></small>
                                        <br>
                                        <small class="text-info">
                                            <b><?php echo e(__('Supported Moli Currency')); ?></b> : <a title="Moli Supported Currency List"
                                                href="https://docs.mollie.com/payments/multicurrency">https://docs.mollie.com/payments/multicurrency</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Cashfree" role="tabpanel" aria-labelledby="v-pills-Cashfree-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Cashfree Payment Setting')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch13" name="enable_cashfree" <?php echo e($gsetting->enable_cashfree == 1 ? 'checked' : ''); ?> />
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="CASHFREE_APP_ID"><?php echo e(__('CASHFREE APP ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('CASHFREE_APP_ID')); ?>" autofocus name="CASHFREE_APP_ID"
                                            type="text" class="form-control" placeholder="Enter cashfree app id" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Please enter
                                            Cashfree')); ?> <b><?php echo e(__('APP ID<')); ?></b></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="CASHFREE_SECRET_KEY"><?php echo e(__('CASHFREE SECRET KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('CASHFREE_SECRET_KEY')); ?>" autofocus
                                            name="CASHFREE_SECRET_KEY" type="text" class="form-control"
                                            placeholder="Enter CASHFREE SECRET KEY " />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Please enter
                                            Cashfree')); ?> <b><?php echo e(__('Secret Key')); ?></b></small>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="CASHFREE_END_POINT"><?php echo e(__('CASHFREE END POINT')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('CASHFREE_END_POINT')); ?>" autofocus
                                            name="CASHFREE_END_POINT" type="text" class="form-control"
                                            placeholder="Enter Cashfree end point Url" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i>
                                            • For <b>Live</b> use : https://api.cashfree.com
                                            <b>|</b>
                                            • For <b>Test</b> use : https://test.cashfree.com
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Skrill" role="tabpanel" aria-labelledby="v-pills-Skrill-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Skrill Payment Setting')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch14" name="enable_skrill" <?php echo e($gsetting->enable_skrill == 1 ? 'checked' : ''); ?>  />
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="SKRILL_MERCHANT_EMAIL"><?php echo e(__('SKRILL MERCHANT EMAIL')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('SKRILL_MERCHANT_EMAIL')); ?>" autofocus
                                            name="SKRILL_MERCHANT_EMAIL" type="text" class="form-control"
                                            placeholder="Enter skrill merchant email" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> For
                                            <b>test</b> use <b>demoqco@sun-fish.com</b></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="SKRILL_API_PASSWORD"><?php echo e(__('SKRILL API PASSWORD')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('SKRILL_API_PASSWORD')); ?>" autofocus
                                            name="SKRILL_API_PASSWORD" type="text" class="form-control"
                                            placeholder="Enter skrill api password" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('For')); ?>

                                            <b><?php echo e(__('test')); ?></b> <?php echo e(__('use')); ?> <b><?php echo e(__('skrill')); ?></b></small>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="SKRILL_LOGO_URL"><?php echo e(__('SKRILL APP LOGO URL')); ?></label>
                                        <input value="<?php echo e(env('SKRILL_LOGO_URL')); ?>" autofocus name="SKRILL_LOGO_URL"
                                            type="url" class="form-control" placeholder="Enter app logo url" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i><?php echo e(__('Enter your
                                            site logo url here.')); ?></small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-FlutterRave" role="tabpanel" aria-labelledby="v-pills-FlutterRave-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="enable_rave"><?php echo e(__('FlutterRave Payment Setting')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch15" name="enable_rave" <?php echo e($gsetting->enable_rave == 1 ? 'checked' : ''); ?>/>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_PUBLIC_KEY"><?php echo e(__('RAVE PUBLIC KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_PUBLIC_KEY')); ?>" autofocus name="RAVE_PUBLIC_KEY"
                                            type="text" class="form-control"
                                            placeholder="Enter rave public email" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> Public Key:
                                            Your Rave publicKey. Sign up on <a
                                                href="https://rave.flutterwave.com/">https://rave.flutterwave.com/</a>
                                            to get one from your settings page</small>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_SECRET_KEY"><?php echo e(__('RAVE SECRET KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_SECRET_KEY')); ?>" autofocus name="RAVE_SECRET_KEY"
                                            type="text" class="form-control" placeholder="Enter rave secret key" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Secret Key:
                                            Your Rave secretKey. Sign up on')); ?> <a
                                                href="https://rave.flutterwave.com/">https://rave.flutterwave.com/</a>
                                           <?php echo e(__(' to get one from your settings page')); ?></small>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_SECRET_HASH"><?php echo e(__('RAVE SECRET HASH')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_SECRET_HASH')); ?>" autofocus name="RAVE_SECRET_HASH"
                                            type="text" class="form-control" placeholder="Enter rave secret hash" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('This is the secret hash for your webhook')); ?></small>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_ENVIRONMENT"><?php echo e(__('RAVE ENVIRONMENT')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_ENVIRONMENT')); ?>" autofocus
                                            name="RAVE_ENVIRONMENT" type="text" class="form-control"
                                            placeholder="Enter rave app enviroment" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Environment:')); ?>

                                            <?php echo e(__('This can either be')); ?> <b>'<?php echo e(__('staging')); ?>'</b> <?php echo e(__('or')); ?> <b><?php echo e(__('live')); ?></b></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_PREFIX"><?php echo e(__('RAVE Transcation Prefix')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_PREFIX')); ?>" autofocus name="RAVE_PREFIX"
                                            type="text" class="form-control"
                                            placeholder="Enter rave transcation prefix" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Prefix: This
                                            is added to the front of your')); ?> <b><?php echo e(__('Transaction reference
                                                numbers')); ?></b>.</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_COUNTRY"><?php echo e(__('RAVE country code')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_COUNTRY')); ?>" autofocus name="RAVE_COUNTRY"
                                            type="text" class="form-control"
                                            placeholder="Enter rave country code" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Enter rave
                                            country code')); ?> <b><?php echo e(__('eg : IN')); ?></b>.</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="RAVE_LOGO"><?php echo e(__('RAVE Buisness APP Logo')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('RAVE_LOGO')); ?>" autofocus name="RAVE_LOGO" type="text"
                                            class="form-control" placeholder="Enter rave app logo url" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Logo: Enter
                                            the')); ?> <b><?php echo e(__('URL')); ?></b> <?php echo e(__('of your company/business logo.')); ?></small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Payhere" role="tabpanel" aria-labelledby="v-pills-Payhere-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Payhere Payment Setting')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch16" name="enable_payhere" <?php echo e($gsetting->enable_payhere == 1 ? 'checked' : ''); ?>/>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYHERE_MERCHANT_ID"><?php echo e(__('PAYHERE MERCHANT ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('PAYHERE_MERCHANT_ID')); ?>" autofocus
                                            name="PAYHERE_MERCHANT_ID" type="text" class="form-control"
                                            placeholder="Enter payhere merchant id" />
                                        
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYHERE_BUISNESS_APP_CODE"><?php echo e(__('PAYHERE BUISNESS APP CODE')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('PAYHERE_BUISNESS_APP_CODE')); ?>" autofocus
                                            name="PAYHERE_BUISNESS_APP_CODE" type="text" class="form-control"
                                            placeholder="Enter payhere buisness app code" />
                                        
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYHERE_APP_SECRET"><?php echo e(__('PAYHERE APP SECRET')); ?></label>
                                        <input value="<?php echo e(env('PAYHERE_APP_SECRET')); ?>" autofocus name="PAYHERE_APP_SECRET"
                                            type="text" class="form-control" placeholder="Enter app logo url" />
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYHERE_MODE"><?php echo e(__('PAYHERE MODE')); ?></label>
                                        <input value="<?php echo e(env('PAYHERE_MODE')); ?>" autofocus name="PAYHERE_MODE"
                                            type="text" class="form-control" placeholder="Enter payhere mode" />
                                        <small class="text-info"><i class="fa fa-question-circle"></i> For Test use <b>"sandbox"</b> and for Live use <b>"live"</b></small>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Iyzipay" role="tabpanel" aria-labelledby="v-pills-Iyzipay-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Iyzipay Payment Setting')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch17" name="iyzico_enable" <?php echo e($gsetting->iyzico_enable == 1 ? 'checked' : ''); ?>/>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="IYZIPAY_BASE_URL"><?php echo e(__('IYZIPAY BASE URL')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('IYZIPAY_BASE_URL')); ?>" autofocus
                                            name="IYZIPAY_BASE_URL" type="text" class="form-control"
                                            placeholder="Enter Iyzipay base url" />

                                        <small class="text-info"><i class="fa fa-question-circle"></i> For Sandbox use <b>https://sandbox-api.iyzipay.com</b> <br>
                                        <i class="fa fa-question-circle"></i> For Live use <b>https://api.iyzipay.com</b></small>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="IYZIPAY_API_KEY"><?php echo e(__('IYZIPAY API KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('IYZIPAY_API_KEY')); ?>" autofocus
                                            name="IYZIPAY_API_KEY" type="text" class="form-control"
                                            placeholder="Enter iyzipay api key" />
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="IYZIPAY_SECRET_KEY"><?php echo e(__('IYZIPAY SECRET KEY')); ?></label>
                                        <input value="<?php echo e(env('IYZIPAY_SECRET_KEY')); ?>" autofocus name="IYZIPAY_SECRET_KEY"
                                            type="text" class="form-control" placeholder="Enter Iyzipay secret key" />
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-SSLCommerze" role="tabpanel" aria-labelledby="v-pills-SSLCommerze-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('SSLCommerze Payment Setting')); ?></label><br>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch18" name="ssl_enable" <?php echo e($gsetting->ssl_enable == 1 ? 'checked' : ''); ?>/>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="API_DOMAIN_URL"><?php echo e(__('SSL API DOMAIN URL')); ?> <span class="text-danger">*</span></label>
                                        
                                        <input value="<?php echo e(env('API_DOMAIN_URL')); ?>" autofocus
                                            name="API_DOMAIN_URL" type="text" class="form-control"
                                            placeholder="Enter Iyzipay base url" />

                                        <small class="text-info"><i class="fa fa-question-circle"></i> For Sandbox use <b>https://sandbox.sslcommerz.com</b> <br>
                                        <i class="fa fa-question-circle"></i> For Live use <b>https://securepay.sslcommerz.com</b></small>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Enable LOCALHOST:</label><br>
                                        <input type="checkbox" class="custom_toggle" id="customSwitch19" name="IS_LOCALHOST" <?php echo e(env('IS_LOCALHOST') == true ? "checked"  : ""); ?>/>
                                        <input type="hidden" name="free" value="0" for="status" id="customSwitch19"><br>
                                        <small class="text-info">(Enable it to when it's when sandbox mode is true.) </small>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="text-dark" for="">SANDBOX MODE:</label><br>
                                    <input type="checkbox" class="custom_toggle" id="customSwitch20" name="SANDBOX_MODE" <?php echo e(env('SANDBOX_MODE') == true ? "checked"  :""); ?>/>
                                    <input type="hidden" name="free" value="0" for="status" id="customSwitch20"><br>
                                    <small class="text-info">(Enable or disable sandbox by toggle it.) </small>
                                </div>
                                            
                                <div class="col-md-6 form-group">
                                    <div class="form-group">
                                        <label class="text-dark" for="STORE_ID"><?php echo e(__('SSL STORE ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('STORE_ID')); ?>" autofocus name="STORE_ID" type="text" class="form-control" placeholder="Enter iyzipay api key" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="STORE_PASSWORD"><?php echo e(__('SSL STORE PASSWORD')); ?></label>
                                        <input value="<?php echo e(env('STORE_PASSWORD')); ?>" autofocus name="STORE_PASSWORD"
                                            type="text" class="form-control" placeholder="Enter Iyzipay secret key" />
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Youtube" role="tabpanel" aria-labelledby="v-pills-Youtube-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Youtube API Keys')); ?></label><br>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch21" name="youtube_enable" <?php echo e($gsetting->youtube_enable == 1 ? 'checked' : ''); ?>/>
                                </div>
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="YOUTUBE_API_KEY"><?php echo e(__('Youtube API Keys')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('YOUTUBE_API_KEY')); ?>" autofocus
                                            name="YOUTUBE_API_KEY" type="text" class="form-control"
                                            placeholder="Enter Youtube Api Keys" />
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Vimeo" role="tabpanel" aria-labelledby="v-pills-Vimeo-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="s_enable"><?php echo e(__('Vimeo API Keys')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch22" name="vimeo_enable" <?php echo e($gsetting->vimeo_enable == 1 ? 'checked' : ''); ?>/>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="VIMEO_CLIENT"><?php echo e(__('VIMEO_CLIENT')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('VIMEO_CLIENT')); ?>" autofocus
                                            name="VIMEO_CLIENT" type="text" class="form-control"
                                            placeholder="Enter vimeo client" />
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="VIMEO_SECRET"><?php echo e(__('VIMEO SECRET')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('VIMEO_SECRET')); ?>" autofocus
                                            name="VIMEO_SECRET" type="text" class="form-control"
                                            placeholder="Enter vimeo secret" />
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="VIMEO_ACCESS"><?php echo e(__('VIMEO ACCESS')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('VIMEO_ACCESS')); ?>" autofocus
                                            name="VIMEO_ACCESS" type="text" class="form-control"
                                            placeholder="Enter vimeo access key" />
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-Aamar" role="tabpanel" aria-labelledby="v-pills-Aamar-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="aamarpay_enable"><?php echo e(__('Aamar Pay API Keys')); ?></label>
                                </div>
                                
                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch23" name="aamarpay_enable" <?php echo e($gsetting->aamarpay_enable == 1 ? 'checked' : ''); ?>/>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AAMARPAY_STORE_ID"><?php echo e(__('AAMARPAY STORE ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('AAMARPAY_STORE_ID')); ?>" autofocus
                                            name="AAMARPAY_STORE_ID" type="text" class="form-control"
                                            placeholder="Enter Aamarpay store ID" />
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="AAMARPAY_KEY"><?php echo e(__('AAMARPAY SIGNATURE KEY')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('AAMARPAY_KEY')); ?>" autofocus
                                            name="AAMARPAY_KEY" type="text" class="form-control"
                                            placeholder="Enter Aamarpay key" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="aamar_pay"><?php echo e(__('AAMARPAY SANDBOX ?')); ?></label><br>
                                        <input type="checkbox" class="custom_toggle" id="customSwitch24" name="AAMARPAY_SANDBOX" <?php echo e(env('AAMARPAY_SANDBOX') == true ? 'checked' : ''); ?>/>
                                        <input type="hidden" name="free" value="0" for="status" id="customSwitch24">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-BrainTree" role="tabpanel" aria-labelledby="v-pills-BrainTree-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="braintree_enable"><?php echo e(__('BrainTree Payment')); ?> </label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch25" name="braintree_check" <?php echo e($gsetting->braintree_enable==1 ? 'checked' : ''); ?>/>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="text-dark" for="pay_cid"><?php echo e(__('BrainTree Env')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['BRAINTREE_ENV']); ?>" autofocus name="BRAINTREE_ENV" type="text" class="form-control" placeholder="Enter BrainTree Env"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="text-dark" for="pay_sid"><?php echo e(__('BrainTree Merchant ID')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['BRAINTREE_MERCHANT_ID']); ?>" autofocus name="BRAINTREE_MERCHANT_ID" type="text" class="form-control" placeholder="Enter BrainTree Merchant ID"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="text-dark" for="pay_mode"><?php echo e(__('BrainTree Public Key')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($env_files['BRAINTREE_PUBLIC_KEY']); ?>" autofocus name="BRAINTREE_PUBLIC_KEY" type="text" class="form-control" placeholder="Enter BrainTree Public Key"/>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_mode"><?php echo e(__('BrainTree Private Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['BRAINTREE_PRIVATE_KEY']); ?>" autofocus name="BRAINTREE_PRIVATE_KEY" type="text" class="form-control" placeholder="Enter BrainTree Private Key"/>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Google" role="tabpanel" aria-labelledby="v-pills-Google-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="gtm_enable"><?php echo e(__('Google Tag Manager')); ?></label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch26" name="GOOGLE_TAG_MANAGER_ENABLED" <?php echo e(env('GOOGLE_TAG_MANAGER_ENABLED') == true ? 'checked' : ''); ?>/>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pay_cid"><?php echo e(__('GOOGLE TAG MANAGER ID')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['GOOGLE_TAG_MANAGER_ID']); ?>" autofocus name="GOOGLE_TAG_MANAGER_ID" type="text" class="form-control" placeholder="Enter GTM ID"/>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Payflexi" role="tabpanel" aria-labelledby="v-pills-Payflexi-tab">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="text-dark" for="payflexi_enable"><?php echo e(__('Payflexi Payment')); ?></label><br>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="checkbox" class="custom_toggle" id="customSwitch27" name="payflexi_check" <?php echo e($gsetting->payflexi_enable==1 ? 'checked' : ''); ?>/>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYFLEXI_KEY"><?php echo e(__('Pay Flexi Public Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYFLEXI_PUBLIC_KEY']); ?>" autofocus name="PAYFLEXI_PUBLIC_KEY" type="text" class="form-control" placeholder="Enter PayFlexi Public Key"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> Public Key: Your PayFlexi publicKey. Sign up on <a href="https://merchant.payflexi.co/">https://merchant.payflexi.co/</a>to get one from your settings page</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYFLEXI_SECRET"><?php echo e(__('Pay Flexi Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYFLEXI_SECRET_KEY']); ?>" autofocus name="PAYFLEXI_SECRET_KEY" type="text" class="form-control" placeholder="Enter PayFlexi Secret Key"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Secret Key: Your PayFlexi secretKey. Sign up on')); ?> <a href="https://merchant.payflexi.co/">https://merchant.payflexi.co/</a>to get one from your settings page</small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYFLEXI_PAYMENT_GATEWAY"><?php echo e(__('Pay Flexi Secret Key')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYFLEXI_PAYMENT_GATEWAY']); ?>" autofocus name="PAYFLEXI_PAYMENT_GATEWAY" type="text" class="form-control" placeholder="Enter Supported PayFlexi Gateway"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Mode:This can either be')); ?> <b><?php echo e(__('stripe')); ?></b> <?php echo e(__('or')); ?> <b><?php echo e(__('paystack')); ?></b>. <?php echo e(__('We are adding more gateways soon')); ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYFLEXI_MODE"><?php echo e(__('Pay Flexi Mode')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e($env_files['PAYFLEXI_MODE']); ?>" autofocus name="PAYFLEXI_MODE" type="text" class="form-control" placeholder="Enter PayFlexi Mode"/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Mode:This can either be ')); ?><b><?php echo e(__('test')); ?></b> <?php echo e(__('or')); ?> <b><?php echo e(__('live')); ?></b>. <?php echo e(__('Add your keys based on the mode')); ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYFLEXI_WEBHOOK_URL"><?php echo e(__('PayFlexiWebhookURL')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(route('payflexi.webhook')); ?>" autofocus type="text" class="form-control" placeholder="" disabled/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('use')); ?> <b><?php echo e(__('this webhook url in PayFlexi Merchant settings page')); ?></b> </small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="PAYFLEXI_WEBHOOK_URL"><?php echo e(__('Pay Flexi Call backURL')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(route('payflexi.callback')); ?>" autofocus type="text" class="form-control" placeholder="" disabled/>
                                        <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('use')); ?> <b><?php echo e(__('this callback url in PayFlexi Merchant settings page')); ?></b> </small>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                    <?php echo e(__("Update")); ?></button>
                                </div>

                                
                            </div>
                        </div>
                        <?php if(Module::has('Esewa') && Module::find('Esewa')->isEnabled()): ?>
				            <?php echo $__env->make('esewa::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				        <?php endif; ?>
                        <?php if(Module::has('Smanager') && Module::find('Smanager')->isEnabled()): ?>
                            <?php echo $__env->make('smanager::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('Paytab') && Module::find('Paytab')->isEnabled()): ?>
                            <?php echo $__env->make('paytab::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('DPOPayment') && Module::find('DPOPayment')->isEnabled()): ?>
                            <?php echo $__env->make('dpopayment::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('AuthorizeNet') && Module::find('AuthorizeNet')->isEnabled()): ?>
                            <?php echo $__env->make('authorizenet::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('Bkash') && Module::find('Bkash')->isEnabled()): ?>
                            <?php echo $__env->make('bkash::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('Midtrains') && Module::find('Midtrains')->isEnabled()): ?>
                            <?php echo $__env->make('midtrains::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('SquarePay') && Module::find('SquarePay')->isEnabled()): ?>
                            <?php echo $__env->make('squarepay::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(Module::has('Worldpay') && Module::find('Worldpay')->isEnabled()): ?>
                            <?php echo $__env->make('worldpay::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                        <?php if(Module::has('Onepay') && Module::find('Onepay')->isEnabled()): ?>
                        <?php echo $__env->make('onepay::admin.api_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
(function($) {
  "use strict";

  $(function(){

      $('#customSwitch1').change(function(){
        if($('#customSwitch1').is(':checked')){
        	$('#s_sec').show('fast');
        }else{
        	$('#s_sec').hide('fast');
        }

      });


      $('#customSwitch2').change(function(){
        if($('#customSwitch2').is(':checked')){
        	$('#pay_sec').show('fast');
        }else{
        	$('#pay_sec').hide('fast');
        }

      });
      $('#payu_sec1').change(function(){
        if($('#payu_sec1').is(':checked')){
        	$('#payu_sec').show('fast');
        }else{
        	$('#payu_sec').hide('fast');
        }

      });
      $('#customSwitch3').change(function(){
        if($('#customSwitch3').is(':checked')){
        	$('#insta_sec').show('fast');
        }else{
        	$('#insta_sec').hide('fast');
        }

      });

      $('#customSwitch25').change(function(){
        if($('#customSwitch25').is(':checked')){
        	$('#brain_sec').show('fast');
        }else{
        	$('#brain_sec').hide('fast');
        }

      });

      $('#customSwitch4').change(function(){
        if($('#customSwitch4').is(':checked')){
        	$('#razor_sec').show('fast');
        }else{
        	$('#razor_sec').hide('fast');
        }

      });

      $('#customSwitch5').change(function(){
        if($('#customSwitch5').is(':checked')){
        	$('#paystack_sec').show('fast');
        }else{
        	$('#paystack_sec').hide('fast');
        }

      });

      $('#customSwitch6').change(function(){
        if($('#customSwitch6').is(':checked')){
        	$('#paytm_sec').show('fast');
        }else{
        	$('#paytm_sec').hide('fast');
        }

      });

      $('#customSwitch7').change(function(){
        if($('#customSwitch7').is(':checked')){
        	$('#captcha_sec').show('fast');
        }else{
        	$('#captcha_sec').hide('fast');
        }

      });

      	$('#customSwitch8').change(function(){
	        if($('#customSwitch8').is(':checked')){
	        	$('#aws_sec').show('fast');
	        }else{
	        	$('#aws_sec').hide('fast');
	        }

	    });


      	$('#customSwitch9').change(function () {
            if ($('#customSwitch9').is(':checked')) {
                $('#omise_sec').show('fast');
            } else {
                $('#omise_sec').hide('fast');
            }

        });

       	$('#customSwitch10').change(function () {
            if ($('#customSwitch10').is(':checked')) {
                $('#payu_sec').show('fast');
            } else {
                $('#payu_sec').hide('fast');
            }

        });

        $('#customSwitch12').change(function () {
            if ($('#customSwitch12').is(':checked')) {
                $('#moli_sec').show('fast');
            } else {
                $('#moli_sec').hide('fast');
            }

        });

        $('#customSwitch13').change(function () {
            if ($('#customSwitch13').is(':checked')) {
                $('#cf_sec').show('fast');
            } else {
                $('#cf_sec').hide('fast');
            }

        });

        $('#customSwitch14').change(function () {
            if ($('#customSwitch14').is(':checked')) {
                $('#sk_sec').show('fast');
            } else {
                $('#sk_sec').hide('fast');
            }

        });

        $('#customSwitch15').change(function () {
            if ($('#customSwitch15').is(':checked')) {
                $('#rave_sec').show('fast');
            } else {
                $('#rave_sec').hide('fast');
            }
        });


        $('#customSwitch16').change(function () {
            if ($('#customSwitch16').is(':checked')) {
                $('#payhere_sec').show('fast');
            } else {
                $('#payhere_sec').hide('fast');
            }
        });


        $('#customSwitch17').change(function () {
            if ($('#customSwitch17').is(':checked')) {
                $('#iyzico_sec').show('fast');
            } else {
                $('#iyzico_sec').hide('fast');
            }
        });

        $('#customSwitch18').change(function () {
            if ($('#customSwitch18').is(':checked')) {
                $('#ssl_sec').show('fast');
            } else {
                $('#ssl_sec').hide('fast');
            }
        });


        $('#customSwitch21').change(function () {
            if ($('#customSwitch21').is(':checked')) {
                $('#youtube_sec').show('fast');
            } else {
                $('#youtube_sec').hide('fast');
            }
        });


        $('#customSwitch22').change(function () {
            if ($('#customSwitch22').is(':checked')) {
                $('#vimeo_sec').show('fast');
            } else {
                $('#vimeo_sec').hide('fast');
            }
        });

        $('#customSwitch23').change(function () {
            if ($('#customSwitch23').is(':checked')) {
                $('#aamarpay_sec').show('fast');
            } else {
                $('#aamarpay_sec').hide('fast');
            }
        });

        $('#customSwitch26').change(function () {
            if ($('#customSwitch26').is(':checked')) {
                $('#gtm_sec').show('fast');
            } else {
                $('#gtm_sec').hide('fast');
            }
        });


        $('#customSwitch27').change(function(){
	        if($('#customSwitch27').is(':checked')){
	        	$('#payflexi_sec').show('fast');
	        }else{
	        	$('#payflexi_sec').hide('fast');
	        }
	    });


  });

})(jQuery);

</script>


<script src="<?php echo e(Module::asset('esewa:js/esewa.js')); ?>"></script>

<script src="<?php echo e(Module::asset('smanager:js/smanager.js')); ?>"></script>

<script src="<?php echo e(Module::asset('paytab:js/paytab.js')); ?>"></script>

<script src="<?php echo e(Module::asset('dpopayment:js/dpopayment.js')); ?>"></script>

<script src="<?php echo e(Module::asset('authorizenet:js/authorizenet.js')); ?>"></script>

<script src="<?php echo e(Module::asset('bkash:js/bkash.js')); ?>"></script>

<script src="<?php echo e(Module::asset('midtrains:js/midtrains.js')); ?>"></script>

<script src="<?php echo e(Module::asset('squarepay:js/squarepay.js')); ?>"></script>

<script src="<?php echo e(Module::asset('worldpay:js/worldpay.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/setting/api.blade.php ENDPATH**/ ?>