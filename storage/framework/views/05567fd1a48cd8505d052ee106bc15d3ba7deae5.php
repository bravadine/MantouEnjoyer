<div
    class="form-group<?php echo e(($this->previewMode ? ' form-group-preview' : '')
     .(form_error($field->fieldName) != '' ? ' is-invalid' : '')
     .' '.$field->type.'-field span-'.$field->span.' '.$field->cssClass); ?>"
    <?php echo $field->getAttributes('container'); ?>

    data-field-name="<?php echo e($field->fieldName); ?>"
    id="<?php echo e($field->getId('group')); ?>"
><?php echo /* Must be on the same line for :empty selector */
    trim($this->makePartial('form/field', ['field' => $field])); ?></div>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_container.blade.php ENDPATH**/ ?>