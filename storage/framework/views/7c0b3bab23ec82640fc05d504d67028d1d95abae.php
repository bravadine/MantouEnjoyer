<textarea
    name="<?php echo e($field->getName()); ?>"
    id="<?php echo e($field->getId()); ?>"
    autocomplete="off"
    class="form-control field-textarea"
    placeholder="<?php echo e($field->placeholder); ?>"
    <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

    <?php echo $field->getAttributes(); ?>

><?php echo e($field->value); ?></textarea>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_textarea.blade.php ENDPATH**/ ?>