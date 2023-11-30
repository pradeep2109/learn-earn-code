
<?php $__env->startSection('title', 'Add theme - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Add theme';
$data['title'] = 'Theme';
$data['title1'] = 'Add theme';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar mb-2">
        <div class="row">

            <!-- Show error message -->
            <?php if($errors->any()): ?>  
                <div class="alert alert-danger" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                        <p>
                            <?php echo e($error); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </div>
            <?php endif; ?>
        <!-- row started -->
            <div class="col-lg-12">
                <div class="card dashboard-card m-b-30">
                    <!-- Card header will display you the heading -->
                    <div class="card-header">
                        <h5 class="card-box"><?php echo e(__('Add theme')); ?></h5>
                        <div>
                            <div class="widgetbar">
                                <a href="<?php echo e(route('themesettings.index')); ?>" class="btn btn-primary-rgba">
                                    <i class="feather icon-arrow-left mr-2"></i>
                                    <?php echo e(__("Back")); ?>

                                </a>
                            </div>
                        </div>
                    </div> 
                
                    <!-- card body started -->
                    <div class="card-body">
                        <!-- form start -->
                        <form action="<?php echo e(route('install.theme')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('POST')); ?>

                            
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- card start -->
                                    <div class="card">
                                        <!-- card body start -->
                                        <div class="card-body">
                                            <!-- row start -->
                                            <div class="row">
                                                <!-- Purchase Code -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-dark"><?php echo e(__('Purchase Code :')); ?><span class="text-danger">*</span></label>
                                                        <input id="pass_log_id6" type="password" placeholder="Please enter valid purchase code" class="form-control"  name="code" value=""  required>
                                                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password6"></span>
                                                    </div>
                                                </div>

                                                <!-- UPLOAD THEME FILE -->
                                                <div class="col-md-6">
                                                    <label class="text-dark mb-1">
                                                        <?php echo e(__('UPLOAD THEME FILE (ZIP FILE) :')); ?>

                                                    </label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input accept=".zip" type="file" required class="custom-file-input" name="addon_file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                                    
                                                <!-- Install theme button -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="reset" class="btn btn-danger-rgba mr-1">
                                                            <i class="fa fa-ban"></i> 
                                                            <?php echo e(__("Reset")); ?>

                                                        </button>
                                                        <button type="submit" class="btn btn-primary-rgba">
                                                            <i class="fa fa-check-circle"></i>
                                                            <?php echo e(__("Install Theme")); ?>

                                                        </button>
                                                    </div>
                                                </div>        
                                            </div><!-- row end -->
                                        </div><!-- card body end -->
                                    </div><!-- card end -->
                                </div><!-- col end -->
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                    <!-- card body end -->
                </div><!-- col end -->
            </div>

        </div><!-- row end -->
    </div>
<?php $__env->stopSection(); ?>
<!-- main content section ended -->

<!-- This section will contain javacsript start -->
<?php $__env->startSection('script'); ?>
    <style>
    .field_icon {
    float: right;
    margin-left: -25px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
    }
    </style>

    <!-- Script to show and hide purchase code -->
    <script>
        $(document).on('click', '.toggle-password6', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#pass_log_id6");
            input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });
    </script>
<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/theme/add.blade.php ENDPATH**/ ?>