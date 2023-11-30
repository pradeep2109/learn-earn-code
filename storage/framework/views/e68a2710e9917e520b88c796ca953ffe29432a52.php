
<?php $__env->startSection('title', 'Profile & Setting'); ?>
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
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="<?php echo e(__('course')); ?>" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('User Profile')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- profile update start -->
<section id="profile-item" class="profile-item-block">
    <div class="container-xl">
    	<form action="<?php echo e(route('user.profile',$orders->id)); ?>" method="POST" enctype="multipart/form-data">
        	<?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>


	        <div class="row">
	            <div class="col-xl-3 col-lg-4 col-md-4">
	                <div class="dashboard-author-block text-center">
	                    <div class="author-image">
						    <div class="avatar-upload">
						        <div class="avatar-edit">
						            <input type='file' id="imageUpload" name="user_img" accept=".png, .jpg, .jpeg" />
						            <label for="imageUpload"><i class="fa fa-pencil"></i></label>
						        </div>
						        <div class="avatar-preview">
						        	<?php if(Auth::User()->user_img != null || Auth::User()->user_img !=''): ?>
							            <div class="avatar-preview-img" id="imagePreview" style="background-image: url(<?php echo e(url('/images/user_img/'.Auth::User()->user_img)); ?>);">
							            </div>
							        <?php else: ?>
							        	<div class="avatar-preview-img" id="imagePreview" style="background-image: url(<?php echo e(asset('images/default/user.jpg')); ?>);">
							            </div>
							        <?php endif; ?>
						        </div>
						    </div>
	                    </div>
	                    <div class="author-name"><?php echo e(Auth::User()->fname); ?>&nbsp;<?php echo e(Auth::User()->lname); ?></div>
	                </div>
	                <div class="dashboard-items">
	                    <ul>
	                        <li>
								<i class="fa fa-bookmark"></i>
								<a href="<?php echo e(route('mycourse.show')); ?>" title="<?php echo e(__('My Courses')); ?>"><?php echo e(__('My Courses')); ?></a>
							</li>
	                        <li>
								<i class="fa fa-heart"></i>
								<a href="<?php echo e(route('wishlist.show')); ?>" title="<?php echo e(__('My wishlist')); ?>"><?php echo e(__('My Wishlist')); ?></a>
							</li>
	                        <li>
								<i class="fa fa-history"></i>
								<a href="<?php echo e(route('purchase.show')); ?>" title="<?php echo e(__('Purchase History')); ?>"><?php echo e(__('Purchase History')); ?></a>
							</li>
	                        <li>
								<i class="fa fa-user"></i>
								<a href="<?php echo e(route('profile.show',Auth::User()->id)); ?>" title="<?php echo e(__('User Profile')); ?>"><?php echo e(__('User Profile')); ?></a>
							</li>
	                        <?php if(Auth::User()->role == "user"): ?>
	                        <li>
								<i class="fas fa-chalkboard-teacher"></i>
								<a href="#" data-toggle="modal" data-target="#myModalinstructor" title="<?php echo e(__('Become An Instructor')); ?>"><?php echo e(__('Become An Instructor')); ?></a>
							</li>
	                        <?php endif; ?>
	                        <li>
								<i class="fa fa-bank"></i>
								<a href="<?php echo e(url('bankdetail')); ?>" title="<?php echo e(__('My Bank Details')); ?>"><?php echo e(__('My Bank Details')); ?></a>
							</li>

	                        <li>
								<i class="fa fa-check"></i>
								<a href="<?php echo e(route('2fa.show')); ?>" title="<?php echo e(__('2 Factor Auth')); ?>"><?php echo e(__('2 Factor Auth')); ?></a>
							</li>
							<li>
								<i class="fa fa-check"></i>
								<a href="<?php echo e(route('verifaction')); ?>" title="<?php echo e(__('Verifaction')); ?>"><?php echo e(__('Verifaction')); ?></a>
							</li>
							
	                        <li>
								<i class="fas fa-user"></i>
								<a href="<?php echo e(route('front.alumini')); ?>" title="<?php echo e(__('Alumini')); ?>"><?php echo e(__('Alumini')); ?></a>
							</li>
	                        
	                    </ul>
	                </div>
	            </div>
	            <div class="col-xl-9 col-lg-8 col-md-8">

	                <div class="profile-info-block">
	                    <div class="profile-heading"><?php echo e(__('Personal Info')); ?></div>
	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label for="name"><?php echo e(__('First Name')); ?></label>
	                                <input type="text" id="name" name="fname" class="form-control" placeholder="<?php echo e(__('Enter First Name')); ?>" value="<?php echo e($orders->fname); ?>" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="email"><?php echo e(__('Email')); ?></label>
	                                <input type="email" id="email" name="email" class="form-control" placeholder="info@example.com" required value="<?php echo e($orders->email); ?>" >
	                            </div>
	                           
	                        </div>
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label for="Username"><?php echo e(__('Last Name')); ?></label>
	                                <input type="text" id="lname" name="lname" class="form-control" placeholder="<?php echo e(__('Enter Last Name')); ?>" value="<?php echo e($orders->lname); ?>" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="mobile"><?php echo e(__('Mobile')); ?></label>
	                                <input type="text" name="mobile" id="mobile" value="<?php echo e($orders->mobile); ?>" class="form-control" placeholder="<?php echo e(__('Enter Mobile No')); ?>">
	                            </div>
	                           
	                            
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label for="bio"><?php echo e(__('address')); ?></label>
	                        <textarea id="address" name="address" class="form-control" placeholder="<?php echo e(__('Enter your Address')); ?>" value=""><?php echo e($orders->address); ?></textarea>
	                    </div>
	                    <br>

	                    <div class="row">
	                        <div class="col-lg-4">
	                        	<div class="form-group">
	                                <label for="city_id"><?php echo e(__('Country')); ?>:</label>
					                <select id="country_id" class="form-control js-example-basic-single" name="country_id">
					                  	<option value="none" selected disabled hidden> 
					                      <?php echo e(__('Select an Option')); ?>

					                    </option>
					                  
					                  <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                    <option value="<?php echo e($coun->country_id); ?>" <?php echo e($orders->country_id == $coun->country_id ? 'selected' : ''); ?>><?php echo e($coun->nicename); ?>

					                    </option>
					                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </select>
	                            </div>
	                        </div>
	                        <div class="col-lg-4">
	                        	<div class="form-group">
	                        		<label for="city_id"><?php echo e(__('State')); ?>:</label>
					                <select id="upload_id" class="form-control js-example-basic-single" name="state_id">
					                  <option value="none" selected disabled hidden> 
					                    <?php echo e(__('Select an Option')); ?>

					                  </option>
					                  <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                    <option value="<?php echo e($s->id); ?>" <?php echo e($orders->state_id==$s->id ? 'selected' : ''); ?>><?php echo e($s->name); ?></option>
					                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					                </select>
	                        	</div>
	                        </div>
	                        <div class="col-lg-4">
	                        	<div class="form-group">
	                        		<label for="city_id"><?php echo e(__('City')); ?>:</label>
					                <select id="grand" class="form-control js-example-basic-single" name="city_id">
					                  <option value="none" selected disabled hidden> 
					                    <?php echo e(__('SelectanOption')); ?>

					                  </option>
					                  <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                    <option value="<?php echo e($c->id); ?>" <?php echo e($orders->city_id == $c->id ? 'selected' : ''); ?>><?php echo e($c->name); ?>

					                    </option>
					                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </select>
	                        	</div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="bio"><?php echo e(__('Author Bio')); ?></label>
	                        <textarea id="detail" name="detail" class="form-control" placeholder="<?php echo e(__('Enter your details')); ?>" value=""><?php echo e($orders->detail); ?></textarea>
	                    </div>
	                    <br>

	                    <div class="row">
		                    <div class="col-lg-12">
		                      <div class="update-password">
		                        <label for="box1"><?php echo e(__('Update Password')); ?>:</label>
		                        <input type="checkbox" name="update_pass" id="myCheck" onclick="myFunction()">
		                      </div>
		                    </div>
		                </div>
		                <div class="password display-none" id="update-password">
			                <div class="row">
				                <div class="col-lg-6">
					                <div class="form-group">
						                <label for="confirmpassword"><?php echo e(__('Password')); ?>:</label>
										  <input name="password" class="form-control" id="password" type="password" placeholder="<?php echo e(__('Enter Password')); ?>" onkeyup='check();' />
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label><?php echo e(__('Confirm Password')); ?>:</label>
										  <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="<?php echo e(__('Confirm Password')); ?>" onkeyup='check();' /> 
										  <span id='message'></span>
										</label>
									</div>
								</div>
							</div>
		            	</div>
		                <br>
	                </div>
	                <div class="social-profile-block">
	                    <div class="social-profile-heading"><?php echo e(__('Social Profile')); ?></div>
	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="social-block">
	                                <div class="form-group">
	                                    <label for="facebook"><?php echo e(__('Facebook Url')); ?></label><br>
	                                    <div class="row">
	                                        <div class="col-lg-2 col-2">
	                                            <div class="profile-update-icon">
	                                                <div class="product-update-social-icons"><a href="<?php echo e($orders->fb_url); ?>" target="_blank" title="facebook"><i class="fa fa-facebook facebook"></i></a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="col-lg-10 col-10">
	                                            <input type="text" name="fb_url" value="<?php echo e($orders->fb_url); ?>" id="facebook" class="form-control" placeholder="<?php echo e(__('Facebook.com')); ?>" />
	                                        </div>
	                                    </div>    
	                                </div>
	                            </div>
	                            <div class="social-block">
	                                <div class="form-group">
	                                    <label for="behance2"><?php echo e(__('Youtube Url')); ?></label><br>
	                                    <div class="row">
	                                        <div class="col-lg-2 col-2">
	                                            <div class="profile-update-icon">
	                                                <div class="product-update-social-icons">
														<a href="<?php echo e($orders->youtube_url); ?>" target="_blank" title="googleplus"><i class="fab fa-youtube youtube"></i></a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="col-lg-10 col-10">
	                                            <input type="text" name="youtube_url" value="<?php echo e($orders->youtube_url); ?>" id="behance2" class="form-control" placeholder="<?php echo e(__('youtube.com')); ?>" />
	                                        </div>
	                                    </div>    
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-6">
	                            <div class="social-block">
	                                <div class="form-group">
	                                    <label for="twitter"><?php echo e(__('Twitter Url')); ?></label><br>
	                                    <div class="row">
	                                        <div class="col-lg-2 col-2">
	                                            <div class="profile-update-icon">
	                                                <div class="product-update-social-icons"><a href="<?php echo e($orders->twitter_url); ?>" target="_blank" title="twitter"><i class="fab fa-twitter twitter"></i></a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="col-lg-10 col-10">
	                                            <input type="text" name="twitter_url" value="<?php echo e($orders->twitter_url); ?>" id="twitter" class="form-control" placeholder="<?php echo e(__('Twitter.com')); ?>" />
	                                        </div>
	                                    </div>    
	                                </div>
	                            </div>
	                            <div class="social-block">
	                                <div class="form-group">
	                                    <label for="dribbble2"><?php echo e(__('Linked In Url')); ?></label><br>
	                                    <div class="row">
	                                        <div class="col-lg-2 col-2">
	                                            <div class="profile-update-icon">
	                                                <div class="product-update-social-icons"><a href="<?php echo e($orders->linkedin_url); ?>" target="_blank" title="linkedin"><i class="fab fa-linkedin-in linkedin"></i></a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="col-lg-10 col-10">
	                                            <input type="text" name="linkedin_url" value="<?php echo e($orders->linkedin_url); ?>" id="dribbble2" class="form-control" placeholder="Linkedin.com/">
	                                        </div>
	                                    </div>    
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="upload-items text-right">
	                    <button type="submit" class="btn btn-primary" title="upload items"><?php echo e(__('Update Profile')); ?></button>
	                </div>
	                
	            </div>
	        </div>

        </form>
    </div>
</section>
<!-- profile update end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-script'); ?>





<script>
(function($) {
  "use strict";
  $(function() {
    var urlLike = '<?php echo e(url('country/dropdown')); ?>';
    $('#country_id').change(function() {
      var up = $('#upload_id').empty();
      var cat_id = $(this).val();    
      if(cat_id){
        $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type:"GET",
          url: urlLike,
          data: {catId: cat_id},
          success:function(data){   
            console.log(data);
            up.append('<option value="0">Please Choose</option>');
            $.each(data, function(id, title) {
              up.append($('<option>', {value:id, text:title}));
            });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
          }
        });
      }
    });
  });
  })(jQuery);

</script>

<script>
(function($) {
  "use strict";
  $(function() {
    var urlLike = '<?php echo e(url('country/gcity')); ?>';
    $('#upload_id').change(function() {
      var up = $('#grand').empty();
      var cat_id = $(this).val();    
      if(cat_id){
        $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type:"GET",
          url: urlLike,
          data: {catId: cat_id},
          success:function(data){   
            console.log(data);
            up.append('<option value="0">Please Choose</option>');
            $.each(data, function(id, title) {
              up.append($('<option>', {value:id, text:title}));
            });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
          }
        });
      }
    });
  });
  })(jQuery);

</script>

<script>
(function($) {
  "use strict";
	function readURL(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
	        $('#imagePreview').hide();
	        $('#imagePreview').fadeIn(650);
	    }
	    reader.readAsDataURL(input.files[0]);
		}
	}
	$("#imageUpload").change(function() {
	    readURL(this);
	});
})(jQuery);
</script>

<script>
  function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("update-password");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
       text.style.display = "none";
    }
  }
</script>

<script>
(function($) {
  "use strict";
	$('#password, #confirm_password').on('keyup', function () {
	  if ($('#password').val() == $('#confirm_password').val()) {
	    $('#message').html('Password Match').css('color', 'green');
	  } else 
	    $('#message').html('Password Do Not Match').css('color', 'red');
	});
})(jQuery);

</script>

<script>
(function($) {
  "use strict";
	tinymce.init({selector:'textarea#detail'});
})(jQuery);
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/user_profile/profile.blade.php ENDPATH**/ ?>