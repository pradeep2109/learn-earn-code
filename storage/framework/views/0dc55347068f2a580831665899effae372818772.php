
<?php $__env->startSection('title', 'Add Cities - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Add Cities';
$data['title'] = 'Add Cities';
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
          <h5 class="card-title"> <?php echo e(__('Add Cities')); ?></h5>
          <div>
            <div class="widgetbar">
              <a href="<?php echo e(url('admin/city')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
          
            </div>
          </div>
        </div>
        <div class="card-body">
          <form id="demo-form2" method="post" enctype="multipart/form-data" action="<?php echo e(url('admin/city')); ?>" data-parsley-validate class="form-horizontal form-label-left">
            <?php echo e(csrf_field()); ?>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputTit1e"><?php echo e(__('City')); ?><sup class="redstar">*</sup></label>
                    <select class="select2-single form-control" name="state_id" required>
                      <option value=""><?php echo e(__('Choose State')); ?>:</option>
                      <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($state->state_id); ?>"><?php echo e($state->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
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
  </div>
</div>
    
<?php $__env->stopSection(); ?>
                  

              



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/country/state/city/add.blade.php ENDPATH**/ ?>