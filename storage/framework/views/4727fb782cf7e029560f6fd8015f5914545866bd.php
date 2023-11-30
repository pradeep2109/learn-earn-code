
<?php $__env->startSection('title','All Students'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Students')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Students')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Alluser.delete')): ?>
        <button type="button" class="float-right btn btn-danger-rgba mr-2 " data-toggle="modal"
            data-target="#bulk_delete"><i class="feather icon-trash mr-2"></i> <?php echo e(__('Delete Selected')); ?></button>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Alluser.delete')): ?>
             <a href="<?php echo e(route('alluser.add')); ?>" class="float-right btn btn-primary-rgba mr-2"><i
                class="feather icon-plus mr-2"></i><?php echo e(__('Add Student')); ?></a>
                <?php endif; ?>

    </div>
</div>
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="contentbar">
    <div class="row">

        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="box-title"><?php echo e(__('All Students')); ?></h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="allusertable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                                            value="all" />
                                        <label for="checkboxAll" class="material-checkbox"></label> 
                                    </th>
                                    <th>#</th>
                                    <th><?php echo e(__('Profile Picture')); ?></th>
                                    <th><?php echo e(__('Student Details')); ?></th>
                                    <th><?php echo e(__('Login As User')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                            <div class="delete-icon"></div>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h4 class="modal-heading"><?php echo e(__('Are You Sure')); ?> ?</h4>
                                            <p><?php echo e(__('Do you really want to delete selected item names here? This process
                                                        cannot be undone')); ?>.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form id="bulk_delete_form" method="post"
                                                action="<?php echo e(route('user.bulk_delete')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('POST'); ?>
                                                <button type="reset" class="btn btn-gray translate-y-3"
                                                    data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                <button type="submit"
                                                    class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(function () {
      
      var table = $('#allusertable').DataTable({
          processing: true,
          serverSide: true,
          searchDelay : 1000,
          stateSave : true,
          ajax: "<?php echo e(route('allusers.index')); ?>",
          columns: [
              {data: 'checkbox', name: 'checkbox'},
              {data: 'DT_RowIndex', name: 'users.id'},
              {data: 'image', name: 'image', orderable: false, searchable: false},
              {data: 'name', name: 'users.fname'},
              {data: 'loginasuser', name: 'loginasuser' , orderable: false, searchable: false},
              {data: 'status', name: 'status', orderable: false, searchable: false},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
</script>
<!-- script for datatable start -->
<script>
    $(document).on("change", ".user", function () {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'user/status',
            data: {
                'status': $(this).is(':checked') ? 1 : 0,
                'id': $(this).data('id')
            },
            success: function(data){
                var warning = new PNotify( {
                title: 'success', text:'Status Update Successfully', type: 'primary', desktop: {
                desktop: true, icon: 'feather icon-thumbs-down'
                }
            });
                warning.get().click(function() {
                    warning.remove();
                });
            }
        });
    })
</script>
<script>
    $("#checkboxAll").on('click', function () {
        $('input.check').not(this).prop('checked', this.checked);
    });
</script>
<!-- script for datatable end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/alluser/index.blade.php ENDPATH**/ ?>