
<?php $__env->startSection('title', 'User Verification - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'User Verification';
$data['title'] = 'User Verification';
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

        <!-- row started -->
        <div class="col-lg-12">

            <div class="card dashboard-card m-b-30">
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('Users')); ?></h5>
                </div>

                <!-- card body started -->
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- table to display faq start -->
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <th>
                                    #
                                </th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Role')); ?></th>
                                <th><?php echo e(__('Verified')); ?></th>
                                <th><?php echo e(__('Blocked')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td>
                                    <?php echo $key+1; ?>
                                </td>
                                <td data-toggle="modal" data-target="#exampleModal"><p><?php echo e($user->fname); ?> <?php echo e($user->lname); ?></p></td>
                                <td><?php echo e($user->role); ?></td>
                                <td>
                                    <?php if( $user->is_verify == 1): ?>
                                    <button  class="btn btn-rounded btn-success-rgba pointer-remove" data-toggle="modal" data-target="#myModal">
                                          <?php echo e(__('Verified')); ?>

                                    </button>
                                    <?php else: ?>
                                          <button type="button" class="btn btn-rounded btn-danger-rgba pointer-remove" data-toggle="modal" data-target="#myModal">
                                          <?php echo e(__('Not Verified')); ?>

                                          </button>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                    <?php if( $user->is_blocked == 1): ?>
                                    <button type="button" class="btn btn-rounded btn-danger-rgba pointer-remove" data-toggle="modal" data-target="#myModal">
                                          <?php echo e(__('Blocked')); ?>

                                    </button>
                                          <?php else: ?>
                                          <button type="button" class="btn btn-rounded btn-success-rgba pointer-remove" data-toggle="modal" data-target="#myModal">
                                          <?php echo e(__('Not Blocked')); ?>

                                          </button>
                                          <?php endif; ?> 
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo e($user->id); ?>"><?php echo e(__('View')); ?></button>

                                </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e($user->fname); ?> <?php echo e($user->lname); ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-4">Email :</div><div class="col-lg-8"><?php echo e($user->email); ?></div>
                                                <div class="col-lg-4">Mobile :</div><div class="col-lg-8"><?php echo e($user->mobile); ?></div>
                                                <div class="col-lg-4">Role :</div><div class="col-lg-8"><?php echo e($user->role); ?></div>
                                                <?php if($user->document_detail): ?>
                                                    <?php if(isset($user->document_detail)): ?>
                                                    <div class="col-lg-4">Document Detail :</div><div class="col-lg-4"><?php echo e($user->document_detail); ?></div><div class="col-lg-4"><a href="<?php echo e(url('images/user_img/'.$user->document_file)); ?>" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></div>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                <div class="col-lg-12 text-center mt-2">No Document</div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#blockedModal<?php echo e($user->id); ?>"><?php echo e(__('Block')); ?></button>
                                            <button type="button" class="btn btn-success"><a class="text-white" href="<?php echo e(url('images/user_img/'.$user->document_file)); ?>" download="document.png" onclick="verify(<?php echo e($user->id); ?>)"><?php echo e(__('Verify')); ?></a></button>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="blockedModal<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="blockedModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="blockedModalLabel"><?php echo e($user->fname); ?> <?php echo e($user->lname); ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo e(route('user_blocked')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label for="exampleFormControlTextarea1">Block Note</label>
                                                        <textarea class="form-control" name="block_note" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                                        
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- table to display faq data end -->
                    </div><!-- table-responsive div end -->
                </div><!-- card body end -->

            </div><!-- col end -->
        </div>
    </div>
</div><!-- row end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
function verify(id) {
    $.ajax({
        url: "<?php echo e(route('verifed_user')); ?>",
        type: 'GET',
        data: {id:id},
        dataType: 'JSON',
        success: function (data) { 
            console.log(data)
            window.location.reload();
        }
    }); 
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/user/verication.blade.php ENDPATH**/ ?>