<?php if(Session::has('alert.config')): ?>
    <?php if(config('sweetalert.animation.enable')): ?>
        <link rel="stylesheet" href="<?php echo e(config('sweetalert.animatecss')); ?>">
    <?php endif; ?>
    <script src="<?php echo e($cdn?? asset('vendor/sweetalert/sweetalert.all.js')); ?>"></script>
    <script>
        Swal.fire(<?php echo Session::pull('alert.config'); ?>);
    </script>
<?php endif; ?>
<?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/vendor/sweetalert/alert.blade.php ENDPATH**/ ?>