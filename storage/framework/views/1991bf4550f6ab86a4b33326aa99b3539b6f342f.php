<form action="<?php echo e(route('user.quick.subscribe',$id)); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <label class="switch">
        <input class="subscribe <?php echo e($is_subscribe); ?>" type="checkbox" data-id="<?php echo e($id); ?>"
            name="is_subscribe" <?php echo e($is_subscribe == '1' ? 'checked' : ''); ?>>
        <span class="knob"></span>
    </label>
</form><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/user/subscription.blade.php ENDPATH**/ ?>