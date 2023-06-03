<?php
    $on = $field->config['on'] ?? $field->config['onText'] ?? 'admin::lang.text_enabled';
    $off = $field->config['off'] ?? $field->config['offText'] ?? 'admin::lang.text_disabled';
    $onColor = $field->config['onColor'] ?? 'success';
    $offColor = $field->config['offColor'] ?? 'danger';
    $labelWith = $field->config['labelWith'] ?? '120';
?>
<input
    type="hidden"
    name="<?php echo e($field->getName()); ?>"
    value="0"
    <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

/>

<div class="field-custom-container">
    <div class="form-check form-switch">
        <input
            type="checkbox"
            name="<?php echo e($field->getName()); ?>"
            id="<?php echo e($field->getId()); ?>"
            class="form-check-input"
            value="1"
            role="switch"
            <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

            <?php echo $field->value == 1 ? 'checked="checked"' : ''; ?>

            <?php echo $field->getAttributes(); ?>

        />
        <label
            class="form-check-label"
            for="<?php echo e($field->getId()); ?>"
        ><?php echo app('translator')->get($off); ?>/<?php echo app('translator')->get($on); ?></label>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_switch.blade.php ENDPATH**/ ?>