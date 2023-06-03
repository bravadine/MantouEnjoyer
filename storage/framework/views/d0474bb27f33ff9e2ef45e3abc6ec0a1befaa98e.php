<div class="modal-dialog modal-dialog-scrollable">
    <?php echo form_open([]); ?>

    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><?php echo e(sprintf(lang('admin::lang.list.setup_title'), lang($this->getConfig('title')))); ?></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label class="form-label"><?php echo app('translator')->get('admin::lang.list.label_visible_columns'); ?></label>
                <div class="help-block"><?php echo app('translator')->get('admin::lang.list.help_visible_columns'); ?></div>
                <div
                    id="lists-setup-sortable"
                    class="list-group"
                >
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($column->type == 'button'): ?>
                            <input
                                type="hidden"
                                id="list-setup-<?php echo e($column->columnName); ?>"
                                name="visible_columns[]"
                                value="<?php echo e($column->columnName); ?>"
                            />
                        <?php else: ?>
                            <div class="list-group-item bg-transparent px-2">
                                <div class="btn btn-handle form-check-handle mr-2">
                                    <i class="fa fa-arrows-alt-v text-muted"></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        type="checkbox"
                                        id="list-setup-<?php echo e($column->columnName); ?>"
                                        class="form-check-input"
                                        name="visible_columns[]"
                                        value="<?php echo e($column->columnName); ?>"
                                        <?php echo $column->invisible ? '' : 'checked="checked"'; ?>

                                    />
                                    <input
                                        type="hidden"
                                        name="column_order[]"
                                        value="<?php echo e($column->columnName); ?>"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="list-setup-<?php echo e($column->columnName); ?>"
                                    ><b><?php echo app('translator')->get($column->label); ?></b></label>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php if($this->showPagination): ?>
                <div class="form-group">
                    <label class="form-label"><?php echo app('translator')->get('admin::lang.list.label_page_limit'); ?></label>
                    <div class="help-block"><?php echo app('translator')->get('admin::lang.list.help_page_limit'); ?></div>
                    <div class="btn-group btn-group-toggle">
                        <?php $__currentLoopData = $perPageOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input
                                type="radio"
                                id="checkbox-page-limit-<?php echo e($optionValue); ?>"
                                class="btn-check"
                                name="page_limit"
                                value="<?php echo e($optionValue); ?>"
                                <?php echo $optionValue == $pageLimit ? 'checked="checked"' : ''; ?>

                            />
                            <label
                                for="checkbox-page-limit-<?php echo e($optionValue); ?>"
                                class="btn btn-light"
                            ><?php echo e($optionValue); ?></label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="modal-footer progress-indicator-container">
            <button
                type="button"
                class="btn btn-link text-danger mr-auto"
                data-request="<?php echo e($this->getEventHandler('onResetSetup')); ?>"
                data-progress-indicator="<?php echo app('translator')->get('admin::lang.text_resetting'); ?>"
            ><?php echo app('translator')->get('admin::lang.list.button_reset_setup'); ?></button>
            <button
                type="button"
                class="btn btn-link"
                data-bs-dismiss="modal"
            ><?php echo app('translator')->get('admin::lang.list.button_cancel_setup'); ?></button>
            <button
                type="button"
                class="btn btn-primary"
                data-request="<?php echo e($this->getEventHandler('onApplySetup')); ?>"
                data-progress-indicator="<?php echo app('translator')->get('admin::lang.text_saving'); ?>"
            ><?php echo app('translator')->get('admin::lang.list.button_apply_setup'); ?></button>
        </div>
    </div>
    <?php echo form_close(); ?>

</div>
<?php /**PATH /var/www/html/app/admin/widgets/lists/list_setup_form.blade.php ENDPATH**/ ?>