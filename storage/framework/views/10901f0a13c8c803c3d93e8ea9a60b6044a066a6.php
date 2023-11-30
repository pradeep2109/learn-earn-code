
<?php $__env->startSection('title', 'Add Facts Slider - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Add Facts Slider';
$data['title'] = 'Facts Slider';
$data['title1'] = 'Add Facts Slider';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
  <?php if($errors->any()): ?>  
  <div class="alert alert-danger" role="alert">
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
  <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true" style="color:red;">&times;</span></button></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-12">
      <div class="card dashboard-card m-b-30">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__('Add Facts Slider')); ?></h5>
          <div>
            <div class="widgetbar">
              <a href="<?php echo e(url('facts')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
            </div>                        
          </div>
        </div>
        <div class="card-body">
          
          <form id="demo-form2" method="post" action="<?php echo e(action('SliderfactsController@store')); ?>"vdata-parsley-validate 
          class="form-horizontal form-label-left"enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          
          <div class="row">
            <div class="form-group col-md-4">
              <label for="icon"><?php echo e(__('Icon')); ?>:<sup class="redstar text-danger">*</sup></label>
             <div class="input-group">
                  <input type="text" class="form-control iconvalue" name="icon" value="Choose icon">
                  <span class="input-group-append">
                      <button  type="button" class="btnicon btn btn-outline-secondary" role="iconpicker"></button>
                  </span>
              </div>
              
            </div>
            <div class="form-group col-md-4">
              <label for="heading"><?php echo e(__('Heading')); ?>:<sup class="redstar text-danger">*</sup></label>
              <input class="form-control" type="text" name="heading" placeholder="Please Enter Your Heading">
            </div>

            <div class="form-group col-md-4">
              <label for="sub_heading"><?php echo e(__('SubHeading')); ?>:<sup class="redstar text-danger">*</sup></label>
              <input type="text" class="form-control" name="sub_heading" id="sub_heading" placeholder="Please Enter Your Sub Heading">
            </div>
           
          </div>
         
          <div class="form-group">
            <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
            <?php echo e(__("Create")); ?></button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/slider_facts/create.blade.php ENDPATH**/ ?>