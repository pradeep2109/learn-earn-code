<?php $__env->startSection('title', 'Class'); ?>
<?php echo $__env->make('theme.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<section id="class-nav" class="class-nav-block">
	<div class="container-xl">
		<div class="row">
			<div class="col-lg-9">
				<div class="class-logo">
					
	                <a href="<?php echo e(url('/')); ?>" title="logo"><img src="<?php echo e(asset('images/favicon/'.$gsetting->favicon)); ?>" class="img-fluid" alt="logo"></a>
	            </div>
	            <?php
	            	$courses = App\Course::where('id', $course)->first();
	            ?>  
				<div class="class-nav-heading"><?php echo e($courses->title); ?></div>
			</div>
			<div class="col-lg-3">
				<div class="class-button">
					<ul>
						<li>
							<a href="<?php echo e(route('mycourse.show')); ?>" class="course_btn"> <i class="fa fa-chevron-left"></i><?php echo e(__('My Courses')); ?></a>
						</li>
						<li>
							<a href="<?php echo e(route('course.content',['id' => $courses->id, 'slug' => $courses->slug ])); ?>" class="course_btn"> <?php echo e(__('Course Content')); ?> <i class="fa fa-chevron-right"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="iframe-video" class="iframe-video-class">
	<div class="body">
		<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;">
			<iframe src="<?php echo e($url.'?modestbranding=1'); ?>" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;" allowfullscreen scrolling="no" allow="encrypted-media">
			
			</iframe>
		</div>
	</div>
</section>
<!-- jquery -->
<?php echo $__env->make('theme.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end jquery -->
</body>
<!-- body end -->
</html> 
<?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/iframe.blade.php ENDPATH**/ ?>