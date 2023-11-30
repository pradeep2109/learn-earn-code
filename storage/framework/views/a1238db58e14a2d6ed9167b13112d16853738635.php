<?php $__env->startComponent('mail::message'); ?>
# Appointment
Hi <?php echo e($request->instructor->fname); ?> !!
<br>
<?php echo e($x); ?>.
<br>

<?php $__env->startComponent('mail::button', ['url' => url('appointment/'. $appoint_id)]); ?>
View Appointment
<?php echo $__env->renderComponent(); ?>



Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/email/userAppointment.blade.php ENDPATH**/ ?>