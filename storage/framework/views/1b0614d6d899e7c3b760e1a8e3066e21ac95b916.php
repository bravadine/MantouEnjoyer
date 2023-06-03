<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title"><?php echo app('translator')->get('main::lang.media_manager.help_attachment_config'); ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
    </div>
    <?php echo form_open([
        'id' => 'attachment-config-form',
        'role' => 'form',
        'method' => 'POST',
        'data-request' => $this->alias.'::onSaveAttachmentConfig',
    ]); ?>

    <input type="hidden" name="media_id" value="<?php echo e($formMediaId); ?>">
    <div class="modal-body">
        <div class="form-fields p-0">
            <?php $__currentLoopData = $formWidget->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $formWidget->renderField($field); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="modal-footer text-right">
        <a
            class="btn-link mr-auto"
            href="<?php echo e($formWidget->model->getPath()); ?>"
            target="_blank"
        ><i class="fa fa-link"></i></a>
        <button
            type="button"
            class="btn btn-link"
            data-bs-dismiss="modal"
        ><?php echo app('translator')->get('admin::lang.button_close'); ?></button>
        <button
            type="submit"
            class="btn btn-primary"
        ><?php echo app('translator')->get('admin::lang.button_save'); ?></button>
    </div>
    <?php echo form_close(); ?>

</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/mediafinder/config_form.blade.php ENDPATH**/ ?>