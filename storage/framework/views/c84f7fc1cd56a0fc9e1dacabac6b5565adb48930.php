<?php
    $staffState = \Admin\Classes\UserState::forUser()
?>
<div
    class="modal fade"
    id="editStaffStatusModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="editStaffStatusModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('admin::lang.staff_status.text_set_status'); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form
                method="POST"
                accept-charset="UTF-8"
                data-request="mainmenu::onSetUserStatus"
                data-request-success="jQuery('#editStaffStatusModal').modal('hide')"
            >
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-select" name="status">
                            <?php $__currentLoopData = $staffState::getStatusDropdownOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    value="<?php echo e($key); ?>"
                                    <?php echo $key == $staffState->getStatus() ? 'selected="selected"' : ''; ?>

                                ><?php echo app('translator')->get($column); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div
                        class="form-group"
                        data-trigger="[name='status']"
                        data-trigger-action="show"
                        data-trigger-condition="value[4]"
                        data-trigger-closest-parent="form"
                    >
                        <input
                            type="text"
                            class="form-control"
                            name="message"
                            value="<?php echo e($staffState->getMessage()); ?>"
                            placeholder="<?php echo app('translator')->get('admin::lang.staff_status.text_lunch_break'); ?>"
                        >
                    </div>
                    <div
                        class="form-group"
                        data-trigger="[name='status']"
                        data-trigger-action="show"
                        data-trigger-condition="value[4]"
                        data-trigger-closest-parent="form"
                    >
                        <select class="form-select" name="clear_after" id="staffClearStatusAfter">
                            <?php $__currentLoopData = $staffState::getClearAfterMinutesDropdownOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    value="<?php echo e($key); ?>"
                                    <?php echo $key == $staffState->getClearAfterMinutes() ? 'selected="selected"' : ''; ?>

                                ><?php echo app('translator')->get($column); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($statusUpdatedAt = $staffState->getUpdatedAt()): ?>
                            <span class="help-block"><?php echo e(time_elapsed($statusUpdatedAt)); ?></span>
                        <?php endif; ?>
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
            </form>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/views/_partials/set_status_form.blade.php ENDPATH**/ ?>