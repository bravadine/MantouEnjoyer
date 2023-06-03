<?php
    $fieldOptions = $field->options();
?>
<div class="field-radio">
    <?php if($fieldCount = count($fieldOptions)): ?>
        <div
            id="<?php echo e($field->getId()); ?>"
            class="btn-group btn-group-toggle bg-light"
        >
            <?php $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input
                    type="radio"
                    id="<?php echo e($field->getId($loop->iteration)); ?>"
                    class="btn-check"
                    name="<?php echo e($field->getName()); ?>"
                    value="<?php echo e($key); ?>"
                    <?php echo $field->value == $key ? 'checked="checked"' : ''; ?>

                    <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                    <?php echo $field->getAttributes(); ?>

                />
                <label
                    for="<?php echo e($field->getId($loop->iteration)); ?>"
                    class="btn btn-light text-nowrap <?php echo e($this->previewMode ? 'disabled' : ''); ?>"
                ><?php echo e(is_lang_key($value) ? lang($value) : $value); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_radiotoggle.blade.php ENDPATH**/ ?>