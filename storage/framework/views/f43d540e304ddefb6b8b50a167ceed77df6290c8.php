
<?php $__env->startSection('title', 'Contact Us'); ?>
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
                        <h1 class="wishlist-home-heading"><?php echo e(__('Contact us')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- about-home end -->
<!-- contact-us start-->
<section id="contact-us" class="contact-us-main-block">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <?php if(isset($gsetting['map_url'])): ?>
                <section id="#" class="map-location btm-30">
                    <iframe src="<?php echo e($gsetting['map_url']); ?>" width="100%" height="450px"></iframe>
                </section>
                <?php endif; ?>
            </div>
            <div class="col-lg-5 col-md-6">
                <h4 class="contact-us-heading"><?php echo e(__('Keep in Touch')); ?></h4>
                <form id="demo-form2" method="post" action="<?php echo e(route('contact.user')); ?>" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>



                    <?php if(Auth::check()): ?>

                    <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="<?php echo e(__('Name')); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="<?php echo e(__('Phone')); ?>">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(__('E-mail')); ?>">
                    </div>
                    <?php
                     $data =  App\Contactreason::where('status', '1')->get();
                    ?>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="reason">
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($coun->reason); ?>"
                              <?php echo e($coun->reason == $coun->id ? 'selected' : ''); ?>>
                              <?php echo e($coun->reason); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    <div class="comment btm-20">
                        <textarea id="comment" name="message" rows="6" placeholder="<?php echo e(__('Your Message')); ?>"></textarea>
                    </div>

                    <?php if($gsetting->captcha_enable == 1): ?>


                        <div class="<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">

                            <?php echo app('captcha')->display(); ?>

                            <?php if($errors->has('g-recaptcha-response')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <br>
                    <?php endif; ?>

                    
                    <div class="contact-form-btn">
                        <button type="submit" class="btn btn-primary" title="Send Message"><?php echo e(__('Message')); ?></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-dtl">
            <div class="row">
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-map-marker"></i></li>
                        <li class="btm-10 caps"><?php echo e(__('address')); ?></li>
                        <li class="btm-40"><?php echo e($gsetting->default_address); ?></li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-envelope"></i></li>
                        <li class="btm-10 caps"><?php echo e(__('Email')); ?> </li>
                        <li class="btm-40"><?php echo e($gsetting->wel_email); ?></li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-phone"></i></li>
                        <li class="btm-10 caps"><?php echo e(__('Phone')); ?></li>
                        <li class="btm-40"><?php echo e($gsetting->default_phone); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact us end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>

<script>
    
jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=<?php echo e($gsetting['map_api']); ?>&libraries=places&callback=initialize";
    
    document.body.appendChild(script);
  });
  function initialize(){
    var myLatLng = {lat: <?php echo e($gsetting['map_lat']); ?>, lng: <?php echo e($gsetting['map_long']); ?>}; // Insert Your Latitude and Longitude For Footer Wiget Map
    var mapOptions = {
      center: myLatLng, 
      zoom: 15,
      disableDefaultUI: true,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]     
    }
    // For Footer Widget Map
    var map = new google.maps.Map(document.getElementById("location"), mapOptions);
    var image = 'images/icons/map.png';
    var beachMarker = new google.maps.Marker({
      position: myLatLng, 
      map: map,   
      icon: image
    });    
  }
</script>
<!-- end jquery -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/contact.blade.php ENDPATH**/ ?>