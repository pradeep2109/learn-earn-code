<div class="row">
    <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header all-user-card-header">
                    <h5 class="box-title"><?php echo e(__('All Order')); ?></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('User')); ?></th>
                                    <th><?php echo e(__('Payment')); ?> <?php echo e(__('Detail')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('SubscriptionStatus')); ?></th>
                                    <th><?php echo e(__('Unenroll')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <p><b><?php echo e(__('User')); ?></b>:
                                            <?php if(Auth::user()->role == 'admin'): ?>
                                            <?php if(isset($order->user)): ?>
                                            <?php echo e($order->user['fname']); ?> <?php echo e($order->user['lname']); ?>

                                            <?php echo e($order->user['email']); ?>

                                            <?php endif; ?>
                                            <?php else: ?>
                                            <?php if($gsetting->hide_identity == 0): ?>
                                            <?php if(isset($order->user)): ?>
                                            <?php echo e($order->user['fname']); ?> <?php echo e($order->user['lname']); ?>

                                            <?php echo e($order->user['email']); ?>

                                            <?php endif; ?>
                                            <?php else: ?>
                                            <?php echo e(__('Hidden')); ?>

                                            <?php endif; ?>
                                            <?php endif; ?>
                                        </p>
                                        <p><b><?php echo e(__('Course')); ?></b>:
                                            <?php if($order->course_id != null): ?>
                                            <?php echo e(optional($order->courses)['title']); ?>

                                            <?php else: ?>
                                            <?php echo e(optional($order->bundle)['title']); ?>

                                            <?php endif; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p><b><?php echo e(__('TransactionId')); ?></b>:
                                            <?php echo e($order->transaction_id); ?></p>
                                        <p><b><?php echo e(__('PaymentMethod')); ?></b>:
                                            <?php echo e($order->payment_method); ?></p>

                                        <?php
                                            $contains = Illuminate\Support\Str::contains($order->currency_icon, 'fa');
                                        ?>

                                        <p><b><?php echo e(__('TotalAmount')); ?></b>:

                                            <?php if($order->coupon_discount == !null): ?>

                                            <?php if($contains): ?>

                                                <i class="<?php echo e($order->currency_icon); ?>"></i><?php echo e($order->total_amount - $order->coupon_discount); ?>


                                                <?php if($order->subscription_id !== null): ?>
                                                / <?php echo e($order->bundle->billing_interval); ?>

                                                <?php endif; ?>

                                            <?php else: ?>
                                            <?php echo e($order->currency_icon); ?> <?php echo e($order->total_amount - $order->coupon_discount); ?>


                                                <?php if($order->subscription_id !== null): ?>
                                                / <?php echo e($order->bundle->billing_interval); ?>

                                                <?php endif; ?>


                                            <?php endif; ?>



                                            <?php else: ?>

                                            <?php if($contains): ?>

                                                <i class="fa <?php echo e($order->currency_icon); ?>"></i><?php echo e($order->total_amount); ?>

                                                <?php if($order->subscription_id !== null): ?>
                                                / <?php echo e($order->bundle->billing_interval); ?>

                                                <?php endif; ?>

                                            <?php else: ?>

                                                <?php echo e($order->currency_icon); ?>


                                                <?php echo e($order->total_amount); ?>

                                                <?php if($order->subscription_id !== null): ?>
                                                / <?php echo e($order->bundle->billing_interval); ?>

                                                <?php endif; ?>

                                            <?php endif; ?>


                                            <?php endif; ?>
                                        </p>

                                    </td>

                                    <td>
                                        

                                        <label class="switch">
                                        <input class="orders" type="checkbox"  data-id="<?php echo e($order->id); ?>" name="status" <?php echo e($order->status == '1' ? 'checked' : ''); ?>>
                                        <span class="knob"></span>
                                      </label>

                                    </td>

                                    <td>
                                        <?php if($order->bundle_id != null): ?>
                                        <?php if($order->subscription_status == 'active'): ?>
                                        <?php echo e(__('Active')); ?>

                                        <?php else: ?>
                                        <?php echo e(__('Canceled')); ?>

                                        <?php endif; ?>
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <?php if($order->subscription_status === 'active'): ?>
                                        <form method="post"
                                            action="<?php echo e(route('stripe.cancelsubscription', ['order_id' => $order->id, 'redirect_to' => '/order'])); ?>"
                                            data-parsley-validate class="form-horizontal form-label-left">
                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-danger btn-xs">
                                                <i class="fa fa-fw fa-close"></i>
                                                <?php echo e(__('Unenroll')); ?>

                                            </button>
                                        </form>
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>

                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-round btn-outline-primary" type="button"
                                                id="CustomdropdownMenuButton1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="feather icon-more-vertical-"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                                <a class="dropdown-item" href="<?php echo e(route('view.order', $order->id)); ?>"><i
                                                        class="feather icon-eye mr-2"></i><?php echo e(__('View')); ?></a>
                                                <a class="dropdown-item btn btn-link" data-toggle="modal"
                                                    data-target="#delete<?php echo e($order->id); ?>">
                                                    <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- delete Modal start -->
                                        <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($order->id); ?>"
                                            tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                                        <p><?php echo e(__('Do you really want to delete')); ?> ?
                                                            <?php echo e(__('This process cannot be undone.')); ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="<?php echo e(url('order/' . $order->id)); ?>"
                                                            class="pull-right">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field("DELETE")); ?>

                                                            <button type="reset" class="btn btn-secondary"
                                                                data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Yes')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- delete Model ended -->

                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->startSection('script'); ?>
<script>
  $(function() {
    $(document).on("change",".orders",function() {
        
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'order-status',
            data: {'status': $(this).is(':checked') ? 1 : 0, 'id': $(this).data('id')},
            success: function(data){
                var warning = new PNotify( {
                title: 'success', text:'Status Update Successfully', type: 'success', desktop: {
                desktop: true, icon: 'feather icon-thumbs-down'
                }
            });
                warning.get().click(function() {
                    warning.remove();
                });
            }
        });
    })
   });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/order/index.blade.php ENDPATH**/ ?>