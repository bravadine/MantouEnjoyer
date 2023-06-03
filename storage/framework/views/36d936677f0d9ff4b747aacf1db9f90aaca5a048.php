<div class="modal-dialog modal-lg">
    <?php echo form_open(
        [
            'id' => 'record-editor-form',
            'role' => 'form',
            'method' => $formWidget->context == 'create' ? 'POST' : 'PATCH',
            'data-request' => $this->alias.'::onSaveRecord',
            'data-control' => 'area-form',
            'class' => 'w-100',
        ]
    ); ?>

    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><?php echo app('translator')->get($formTitle); ?></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
        </div>
        <input type="hidden" name="areaId" value="<?php echo e($formAreaId); ?>">
        <input type="hidden" data-map-shape <?php echo $this->getMapShapeAttributes($formWidget->model); ?>>
        <div class="modal-body">
            <div class="form-fields p-0">
                <?php $__currentLoopData = $formWidget->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $formWidget->renderField($field); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="modal-footer text-right">
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
    </div>
    <?php echo form_close(); ?>

</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/maparea/area_form.blade.php ENDPATH**/ ?>