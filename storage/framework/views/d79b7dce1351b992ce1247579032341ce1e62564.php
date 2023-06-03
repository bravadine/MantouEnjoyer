<?php
    $fieldOptions = $field->options();
    $checkedValues = (array)$field->value;
?>

<div class="field-checkbox">
    <?php if($this->previewMode && $field->value): ?>
        <div
            id="<?php echo e($field->getId()); ?>"
            class="btn-group btn-group-toggle bg-light"
        >
            <?php $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $checkboxId = 'checkbox_'.$field->getId().'_'.$loop->iteration;
                    if (is_string($option)) $option = [$option];
                ?>
                <input
                    type="checkbox"
                    id="<?php echo e($checkboxId); ?>"
                    class="btn-check"
                    name="<?php echo e($field->getName()); ?>[]"
                    value="<?php echo e($value); ?>"
                    <?php echo in_array($value, $checkedValues) ? 'checked="checked"' : ''; ?>

                    disabled="disabled"
                />
                <label
                    for="<?php echo e($checkboxId); ?>"
                    class="btn btn-light text-nowrap"
                ><?php echo e(is_lang_key($option[0]) ? lang($option[0]) : $option[0]); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php elseif(!$this->previewMode && count($fieldOptions)): ?>
        <div
            id="<?php echo e($field->getId()); ?>"
            class="btn-group btn-group-toggle bg-light"
        >
            <?php $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $checkboxId = 'checkbox_'.$field->getId().'_'.$loop->iteration;
                    if (is_string($option)) $option = [$option];
                ?>
                <input
                    type="checkbox"
                    id="<?php echo e($checkboxId); ?>"
                    class="btn-check"
                    name="<?php echo e($field->getName()); ?>[]"
                    value="<?php echo e($value); ?>"
                    <?php echo in_array($value, $checkedValues) ? 'checked="checked"' : ''; ?>

                    <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                    <?php echo $field->getAttributes(); ?>

                />
                <label
                    for="<?php echo e($checkboxId); ?>"
                    class="btn btn-light text-nowrap"
                ><?php echo e(is_lang_key($option[0]) ? lang($option[0]) : $option[0]); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>

        <input
            type="hidden"
            name="<?php echo e($field->getName()); ?>"
            value="0"
            <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

        />

        <div class="form-check" tabindex="0">
            <input
                type="checkbox"
                class="form-check-input"
                id="<?php echo e($field->getId()); ?>"
                name="<?php echo e($field->getName()); ?>"
                value="1"
                <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                <?php echo $field->value == 1 ? 'checked="checked"' : ''; ?>

                <?php echo $field->getAttributes(); ?>

            />
            <label class="form-check-label" for="<?php echo e($field->getId()); ?>">
                <?php if($field->placeholder): ?> <?php echo app('translator')->get($field->placeholder); ?> <?php else: ?> &nbsp; <?php endif; ?>
            </label>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_checkboxtoggle.blade.php ENDPATH**/ ?>