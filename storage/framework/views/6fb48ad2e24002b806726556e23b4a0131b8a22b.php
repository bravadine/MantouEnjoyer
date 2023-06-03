<?php echo form_open(current_url()); ?>

<div class="modal-header">
    <h4 class="modal-title"><?php echo app('translator')->get('admin::lang.dashboard.text_add_widget'); ?></h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
    <div class="form-group">
        <label class="form-label"><?php echo app('translator')->get('admin::lang.dashboard.label_widget'); ?></label>
        <select class="form-select" name="className">
            <option value=""><?php echo app('translator')->get('admin::lang.dashboard.text_select_widget'); ?></option>
            <?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $className => $widgetInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="<?php echo e($className); ?>"
                ><?php echo e(isset($widgetInfo['label']) ? lang($widgetInfo['label']) : $className); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label class="form-label"><?php echo app('translator')->get('admin::lang.dashboard.label_widget_columns'); ?></label>
        <select class="form-select" name="size">
            <option></option>
            <?php $__currentLoopData = $gridColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="<?php echo e($column); ?>"
                    <?php if($column == 12): ?> selected="selected" <?php endif; ?>
                ><?php echo e($name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="modal-footer">
    <button
        type="button"
        class="btn btn-primary"
        data-request="<?php echo e($this->getEventHandler('onAddWidget')); ?>"
        data-bs-dismiss="modal"
    ><?php echo app('translator')->get('admin::lang.button_add'); ?></button>
    <button
        type="button"
        class="btn btn-default"
        data-bs-dismiss="modal"
    ><?php echo app('translator')->get('admin::lang.button_close'); ?></button>
</div>
<?php echo form_close(); ?>

<?php /**PATH /var/www/html/app/admin/widgets/dashboardcontainer/new_widget_popup.blade.php ENDPATH**/ ?>