<?php
    $currencyModel = \System\Models\Currencies_model::getDefault();
    $symbolAfter = $currencyModel->getSymbolPosition();
    $symbol = $currencyModel->getSymbol();
?>
<?php if($this->previewMode): ?>
    <p class="form-control-static"><?php echo e($field->value ? currency_format($field->value) : '0'); ?></p>
<?php else: ?>
    <div class="input-group">
        <?php if (! ($symbolAfter)): ?>
            <span class="input-group-text"><b><?php echo e($symbol); ?></b></span>
        <?php endif; ?>
        <input
            name="<?php echo e($field->getName()); ?>"
            id="<?php echo e($field->getId()); ?>"
            class="form-control"
            value="<?php echo e(number_format($field->value, 2, '.', '')); ?>"
            placeholder="<?php echo app('translator')->get($field->placeholder); ?>"
            autocomplete="off"
            step="any"
            <?php echo $field->hasAttribute('pattern') ? '' : 'pattern="-?\d+(\.\d+)?"'; ?>

            <?php echo $field->hasAttribute('maxlength') ? '' : 'maxlength="255"'; ?>

            <?php echo $field->getAttributes(); ?>

        />
        <?php if($symbolAfter): ?>
            <span class="input-group-text"><b><?php echo e($symbol); ?></b></span>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_currency.blade.php ENDPATH**/ ?>