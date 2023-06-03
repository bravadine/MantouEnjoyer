<?php
    $fieldOptions = $field->options();
    $useSearch = $field->getConfig('showSearch', count($fieldOptions) > 10);
    $multiOption = $field->getConfig('multiOption', false);
    $fieldValue = is_null($field->value) ? [] : $field->value;
    $fieldValue = !is_array($fieldValue) ? [$fieldValue] : $fieldValue;
?>
<?php if($this->previewMode): ?>
    <div
        class="form-control-static"
    ><?php if(isset($fieldOptions[$field->value])): ?><?php echo app('translator')->get($fieldOptions[$field->value]); ?><?php endif; ?></div>
<?php else: ?>
    <select
        id="<?php echo e($field->getId()); ?>"
        name="<?php echo $field->getName().($multiOption ? '[]' : ''); ?>"
        data-control="selectlist"
        <?php if($field->placeholder): ?>data-placeholder-text="<?php echo app('translator')->get($field->placeholder); ?>" <?php endif; ?>
        data-show-search="<?php echo e($useSearch); ?>"
        <?php echo $multiOption ? 'multiple="multiple"' : ''; ?>

        <?php echo $field->getAttributes(); ?>>

        <?php if(!$multiOption && $field->placeholder): ?>
            <option data-placeholder="true"></option>
        <?php endif; ?>
        <?php $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                if (!is_array($option)) $option = [$option];
            ?>
            <option
                <?php echo in_array($value, $fieldValue) ? 'selected="selected"' : ''; ?>

                value="<?php echo e($value); ?>">
                <?php echo e(is_lang_key($option[0]) ? lang($option[0]) : $option[0]); ?>

                <?php if(isset($option[1])): ?> - <?php echo e($option[1]); ?><?php endif; ?>
            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_select.blade.php ENDPATH**/ ?>