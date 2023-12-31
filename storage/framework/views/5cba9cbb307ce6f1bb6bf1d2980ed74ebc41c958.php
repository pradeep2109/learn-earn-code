
<?php $__env->startSection('title', 'Facts Slider - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Facts Slider';
$data['title'] = 'Facts Slider';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
      <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="box-title"><?php echo e(__('Facts Sliders')); ?></h5>
                    <div>
                      <div class="widgetbar">
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('front-settings.fact-slider.create')): ?>
                          <a  href="<?php echo e(url('facts/create')); ?>" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i><?php echo e(__("Add Slider facts")); ?></a>
                          <?php endif; ?>
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('front-settings.fact-slider.delete')): ?>
                          <a href="page-product-detail.html" class="btn btn-danger-rgba"  data-toggle="modal" data-target=".bd-example-modal-sm1"><i class="feather icon-trash mr-2"></i><?php echo e(__("Delete Selected")); ?></a>
                            <?php endif; ?>                      
                          <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__("Delete")); ?></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body text-center">
                                          <p class="text-muted"><?php echo e(__("Do you really want to delete these records? This process cannot be undone.")); ?></p>
                                      </div>
                                      <div class="modal-footer">
                                        <form method="post" action="<?php echo e(action('BulkdeleteController@factssliderdeleteAll')); ?>

                                        " id="bulk_delete_form" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>

                    
                    
                                        
                                        
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("No")); ?></button>
                                          <button type="submit" class="btn btn-danger"><?php echo e(__("Yes")); ?></button>
                                      </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>                        
                    </div>
                  </div>
                <div class="card-body">
                 
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                              <th>
                                <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" id="checkboxAll">
                                <label for="checkboxAll" class="material-checkbox"></label> 
                                #</th>
                              <th><?php echo e(__('Icon')); ?></th>
                              <th><?php echo e(__('Heading')); ?></th>
                              <th><?php echo e(__('SubHeading')); ?></th>
                              <th><?php echo e(__('Action')); ?></th>
                            
                            </tr>
                            </thead>
                            <tbody>
                              <?php $i=0;?>
                              <?php $__currentLoopData = $facts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $i++;?>
                              <tr>
                                <td><input type="checkbox" form="bulk_delete_form" class="filled-in material-checkbox-input" name="checked[]" value="<?php echo e($fact->id); ?>" id="checkbox<?php echo e($fact->id); ?>">
                                    <label for="checkbox<?php echo e($fact->id); ?>" class="material-checkbox"></label><?php echo $i;?></td>
                                <td><i class="fa <?php echo e($fact->icon); ?>"></i></td>
                                <td><?php echo e($fact->heading); ?></td>
                                <td><?php echo e($fact->sub_heading); ?></td>
                                <td>
                                 <div class="dropdown">
                                     <button class="btn btn-round btn-primary-rgba" type="button" id="CustomdropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                     <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton3">
                                         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('front-settings.fact-slider.edit')): ?>
                                         <a class="dropdown-item"    href="<?php echo e(route('facts.edit',$fact->id)); ?>" ><i class="feather icon-edit mr-2"></i><?php echo e(__("Edit")); ?></a>
                                         <?php endif; ?>
                                         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('front-settings.fact-slider.delete')): ?>
                                         <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                       <?php endif; ?>
                                     </div>
                                 </div>
                               </td>
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                      <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                                  <p class="text-muted"><?php echo e(__("Do you really want to delete these records? This process cannot be undone.")); ?></p>
                                              </div>
                                              <div class="modal-footer">
                                                <form  method="post" action="<?php echo e(url('facts/'.$fact->id)); ?>

                                                  "data-parsley-validate class="form-horizontal form-label-left">
                                                  <?php echo e(csrf_field()); ?>

                                                  <?php echo e(method_field('DELETE')); ?>

                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("No")); ?></button>
                                                  <button type="submit" class="btn btn-danger"><?php echo e(__("Yes")); ?></button>
                                              </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              
                
                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                              </tr>
                            </tbody>
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/slider_facts/index.blade.php ENDPATH**/ ?>