
<?php $__env->startSection('title','All States'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'States';
$data['title'] = 'States';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <div class="contentbar">                
    <!-- Start row -->
    <div class="row">
		 <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="box-title"><?php echo e(__('States')); ?></h5>
					<div>
						<div class="widgetbar">
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('locations.state.create')): ?>
							<a  href=" <?php echo e(url('admin/state/create')); ?> "  class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i><?php echo e(__("Add State")); ?></a>
							<button type="button"  class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleStandardModal">
							  <i class="feather icon-plus mr-2"></i><?php echo e(__("Add State Manual")); ?></button>
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
	                               #</th>
								<th><?php echo e(__('State')); ?></th>
								<th><?php echo e(__('Country')); ?></th>
								<th><?php echo e(__('Delete')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
								<?php $i=0;?> 
								<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
									<tr>
									  <?php $i++;?>
									  <td> 
										<?php echo $i;?></td>
									  <td><?php echo e($state->name); ?></td>
									  <td><?php if(isset($state->country)): ?> <?php echo e($state->country->nicename); ?> <?php endif; ?></td>
                               

                              <td>
                                <a href="page-product-detail.html" class="btn btn-danger-rgba"  data-toggle="modal" data-target=".bd-example-modal-sm"><i class="feather icon-delete"></i></a>
                                
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
												<form  method="post" action="<?php echo e(url('admin/state/'.$state->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
													<?php echo e(csrf_field()); ?>

													<?php echo e(method_field('DELETE')); ?>

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("Close")); ?></button>
                                                <button type="submit" class="btn btn-primary"><?php echo e(__("Delete")); ?></button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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
              
<!--Model for add city -->
<div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleStandardModalLabel">Add State</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			  <form id="demo-form2" method="post" action="<?php echo e(route('state.manual')); ?>" data-parsley-validate class="form-horizontal form-label-left">
				  <?php echo e(csrf_field()); ?>

	
					<div class="row">
					  <div class="col-md-12">
						<label for="exampleInputDetails"><?php echo e(__('Choose State')); ?> :<sup class="redstar">*</sup></label>
						<select class="select2-single form-control" name="country_id">
							<option><?php echo e(__('Choose Country')); ?>:</option>
	  
							
							<?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($cou->country_id); ?>"><?php echo e($cou->name); ?></option>
						  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						 
					  </div>
					  </div>
					  <br>
	
					<div class="row">
						<div class="col-md-12">
						<label for="exampleInputDetails"> <?php echo e(__('State')); ?>:<sup class="redstar">*</sup></label>
						<input type="text" name="name" class="form-control" placeholder="Enter State Name">
					  </div>
					</div>
	
					<br>
				 
				
					<div class="form-group">
						<button type="reset" class="btn btn-danger mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
						<button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
						<?php echo e(__("Create")); ?></button>
					</div>

				</form>
			</div>
		   
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

                               
                              
                
                               
                              




<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/country/state/index.blade.php ENDPATH**/ ?>