<input
    type="hidden"
    name="<?php echo e($field->getName()); ?>"
    id="<?php echo e($field->getId()); ?>"
    value="<?php echo e($field->value); ?>"
    placeholder="<?php echo e($field->placeholder); ?>"
    autocomplete="off"
    <?php echo $field->hasAttribute('maxlength') ? '' : 'maxlength="255"'; ?>

    <?php echo $field->getAttributes(); ?>

/>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_hidden.blade.php ENDPATH**/ ?>