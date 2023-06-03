<?php if($this->previewMode): ?>
    <p class="form-control-static"><?php echo e($field->value ? e($field->value) : '0'); ?></p>
<?php else: ?>
    <input
        type="number"
        name="<?php echo e($field->getName()); ?>"
        id="<?php echo e($field->getId()); ?>"
        value="<?php echo e($field->value); ?>"
        placeholder="<?php echo e($field->placeholder); ?>"
        class="form-control"
        autocomplete="off"
        <?php echo $field->hasAttribute('pattern') ? '' : 'pattern="-?\d+(\.\d+)?"'; ?>

        <?php echo $field->hasAttribute('maxlength') ? '' : 'maxlength="255"'; ?>

        <?php echo $field->getAttributes(); ?>

    />
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_number.blade.php ENDPATH**/ ?>