
<?php $__env->startSection('title', 'QrSetting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'QrSetting';
$data['title'] = 'QrSetting';
$data['title1'] = 'QrSetting';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger" role="alert">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="text-danger" >&times;</span></button></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    <div class="row">
    <div class="col-lg-12">
        <div class="card dashboard-card m-b-30">
            <div class="card-header">
                <h5 class="card-title"><?php echo e(__('QrSetting')); ?></h5>
            </div>
            <div class="card-body">
                <form class="form" action="<?php echo e(route('mobileqr.update')); ?>" method="POST" novalidate
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="text-dark" for="exampleInputSlug"><?php echo e(__('User QR')); ?>:
                            </label>
                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                                </div>
                                <div class="custom-file">

                                    <input type="file" name="image" class="custom-file-input" id="img"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label"
                                        for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                                </div>
                            </div>
                            <img src="<?php echo e(url('/images/qr/'.$qrsetting->image)); ?>" height="100px;" width="100px;" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-dark" for="exampleInputSlug"><?php echo e(__('Instructor QR')); ?>:
                            </label>
                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                                </div>
                                <div class="custom-file">

                                    <input type="file" name="image2" class="custom-file-input" id="img2"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label"
                                        for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                                </div>
                            </div>
                            <img src="<?php echo e(url('/images/qr/'.$qrsetting->image2)); ?>" height="100px;" width="100px;" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-dark" for="exampleInputSlug"><?php echo e(__('Demo Image')); ?>:
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="demo_image" class="custom-file-input" id="demo"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label"
                                        for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                                </div>
                            </div>
                            <img src="<?php echo e(url('/images/qr/'.$qrsetting->demo_image)); ?>" height="100px;" width="100px;" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i>
                            <?php echo e(__("Reset")); ?></button>
                        <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                            <?php echo e(__("Update")); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/qr/setting.blade.php ENDPATH**/ ?>