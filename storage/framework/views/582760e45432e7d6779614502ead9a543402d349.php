<form class="form" action="<?php echo e(action('WhatsappButtonController@update')); ?>" method="POST" novalidate enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('POST')); ?>


    <div class="row">
        <div class="col-md-6">            
            <div class="form-group">
                <label class="text-dark"><?php echo e(__('HeaderTitle')); ?> : </label>
                <input name="wapp_title" autofocus="" type="text" class="form-control" placeholder="Header Title"  value="<?php echo e($setting['wapp_title']); ?>">
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter Header Title !')); ?>.
                </div>
            </div>
        </div>

        <div class="col-md-6">            
            <div class="form-group">
                <label class="text-dark"><?php echo e(__('WhatasppPhoneNo')); ?> <?php echo e(__('(with country code)')); ?>:</label>
                <input name="wapp_phone" autofocus="" type="text" class="form-control" placeholder="Please Enter Whatsapp Phone Number" value="<?php echo e($setting['wapp_phone']); ?>">
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter Whatsapp Phone Number !')); ?>.
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
                <label class="text-dark"><?php echo e(__('WhatasppPopUpMsg')); ?> :</label>
                <input name="wapp_popup_msg" autofocus="" type="text" class="form-control" placeholder="PopUp Message"  value="<?php echo e($setting['wapp_popup_msg']); ?>">
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter Whataspp PopUp Message !')); ?>.
                </div>
            </div>
        </div>

        <div class="col-md-6">            
            <div class="form-group">
                <label class="text-dark" for="number"><?php echo e(__('whatsappcolor')); ?> :</label>
                <input name="wapp_color" autofocus="" type="color" class="form-control my-colorpicker1" placeholder="Choose color" value="<?php echo e($setting['wapp_color']); ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark"><?php echo e(__('ButtonPosition')); ?> (<?php echo e(__('Right/left')); ?>):</label><br>
                <input  class="custom_toggle"  type="checkbox" name="wapp_position"  <?php echo e($setting['wapp_position'] == 'left' ? 'checked' : ''); ?> />
                <input type="hidden"  name="free" value="0" for="left" id="left">
              
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="text-dark" for="exampleInputDetails"><?php echo e(__('EnableWhatsappChatButton')); ?> :</label><br>
            <input type="checkbox" class="custom_toggle" name="wapp_enable" <?php echo e($setting['wapp_enable'] == '1' ? 'checked' : ''); ?> />
            <input type="hidden"  name="free" value="0" for="status" id="status">
        </div>

    </div>

    <div class="form-group">
        <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
        <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
            <?php echo e(__("Update")); ?></button>
    </div>
    
</form><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/admin/setting/whatsapp.blade.php ENDPATH**/ ?>