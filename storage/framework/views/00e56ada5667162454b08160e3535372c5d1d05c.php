
<?php $__env->startSection('title','All Countries'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'All Countries';
$data['title'] = 'Country';
$data['title1'] = 'Add Country';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="contentbar">                
    <!-- Start row -->
    <div class="row">
    
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="box-title"><?php echo e(__('Countries')); ?></h5>
					<div>
						<div class="widgetbar">
						  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('locations.country.delete')): ?>
							<a  href=" <?php echo e(url('admin/country/create')); ?>" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i><?php echo e(__("Add Country")); ?></a>
							<?php endif; ?>
						  
						</div>                        
					  </div>
                </div>
                <div class="card-body">
                 
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                              <th> 
                                <?php echo e(__("#")); ?></th>
                              <th><?php echo e(__("Country Name")); ?> </th>
                              <th><?php echo e(__("ISO Code 2")); ?></th>
                              <th><?php echo e(__("ISO Code 3")); ?></th>
                              <th><?php echo e(__("Action")); ?></th>
                      
                            </tr>
                            </thead>
                            <tbody>
                              <?php $i=0;?> 
                              <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                  <?php $i++;?>
                                  <td>
 
                                   
                                  <?php echo $i;?></td>
                                  <td><?php echo e($country->nicename); ?></td>
                                  <td><?php echo e($country->iso); ?></td>
                                  <td><?php echo e($country->iso3); ?></td>
                               <td>
                                
                                  <div class="dropdown">
                                      <button class="btn btn-round btn-primary-rgba" type="button" id="CustomdropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                      <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton3">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('locations.country.edit')): ?>
                                          <a class="dropdown-item"   href="<?php echo e(url('admin/country/'.$country->id. '/edit')); ?>"><i class="feather icon-edit mr-2"></i><?php echo e(__("Edit")); ?></a>
                                          <?php endif; ?>
                                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('locations.country.delete')): ?>
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
                                              <form  method="post" action="<?php echo e(url('admin/country/'.$country->id)); ?>

                                                "data-parsley-validate class="form-horizontal form-label-left">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("Close")); ?></button>
                                                <button type="submit" class="btn btn-primary"><?php echo e(__("Delete")); ?></button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
              
                               
                              
                              </tr>
                               
                              
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/country/index.blade.php ENDPATH**/ ?>