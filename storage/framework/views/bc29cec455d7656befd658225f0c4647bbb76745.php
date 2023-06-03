<?php
    $saveActions = array_get($button->config, 'saveActions', ['continue', 'close', 'new']);
    $selectedAction = @json_decode($d = array_get($_COOKIE, 'ti_activeFormSaveAction'), true);
    $selectedAction = ($selectedAction && in_array($selectedAction, $saveActions)) ? $selectedAction : 'continue';
?>
<div
    class="btn-group"
    data-control="form-save-actions"
>
    <button
        type="button"
        tabindex="0"
        <?php echo $button->getAttributes(); ?>

    ><?php echo $button->label ?: $button->name; ?></button>
    <button
        type="button"
        class="<?php echo e($button->cssClass); ?> dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown"
        data-bs-display="static"
        data-bs-reference="parent"
        aria-haspopup="true"
        aria-expanded="false"
    ><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu dropdown-menu-left">
        <h6 class="dropdown-header px-2">After saving</h6>
        <?php $__currentLoopData = ['continue', 'close', 'new']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($saveActions && !in_array($action, $saveActions)) continue; ?>
            <div class="dropdown-item px-2">
                <div class="form-check">
                    <input
                        type="radio"
                        id="toolbar-button-save-action-<?php echo e($action); ?>"
                        class="form-check-input"
                        name="toolbar_save_action"
                        value="<?php echo e($action); ?>"
                        <?php echo $selectedAction === $action ? 'checked="checked"' : ''; ?>

                    />
                    <label
                        class="form-check-label"
                        for="toolbar-button-save-action-<?php echo e($action); ?>"
                    ><?php echo app('translator')->get('admin::lang.form.save_actions.'.$action); ?></label>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<input type="hidden" data-form-save-action="" name="<?php echo e($selectedAction); ?>" value="1">
<?php /**PATH /var/www/html/app/admin/views/_partials/form/toolbar_save_button.blade.php ENDPATH**/ ?>