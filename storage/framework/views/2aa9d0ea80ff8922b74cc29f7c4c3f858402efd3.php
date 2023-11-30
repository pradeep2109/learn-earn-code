
<?php $__env->startSection('title', 'Mailchimp Setting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Mailchimp Setting';
$data['title'] = 'Mailchimp Setting';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">&times;</span></button></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="card-title"><?php echo e(__('Mailchimp Setting')); ?></h5>
                </div>
                <div class="card-body">
                    <form class="form" action="<?php echo e(route('mailchimp.update')); ?>" method="POST" novalidate
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="MAILCHIMP_APIKEY"><?php echo e(__('Mailchimp Apikey')); ?> <span class="text-danger">*</span></label>
                                    <input value="<?php echo e(env('MAILCHIMP_APIKEY')); ?>" autofocus name="MAILCHIMP_APIKEY" type="text" class="form-control" placeholder="Enter Mailchimp api Key"/>
                                </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="MAILCHIMP_LIST_ID"><?php echo e(__('Mailchimp listid')); ?> <span class="text-danger">*</span></label>
                                        <input value="<?php echo e(env('MAILCHIMP_LIST_ID')); ?>" autofocus name="MAILCHIMP_LIST_ID" type="text" class="form-control" placeholder="Enter  Mailchimp list id"/>
                                    </div>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/mailchimp/setting.blade.php ENDPATH**/ ?>