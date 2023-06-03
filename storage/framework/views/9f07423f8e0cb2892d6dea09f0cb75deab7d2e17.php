<div
    class="filter-scope date form-group"
    data-control="datepicker"
    data-opens="<?php echo e(array_get($scope->config, 'pickerPosition', 'left')); ?>"
    data-time-picker="<?php echo e(array_get($scope->config, 'showTimePicker', 'false')); ?>"
    data-locale='{"format": "<?php echo e($pickerFormat = array_get($scope->config, 'pickerFormat', 'MMM D, YYYY')); ?>"}'
>
    <div class="input-group">
        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
        <input
            type="text"
            id="<?php echo e($this->getScopeName($scope)); ?>-datepicker"
            class="form-control"
            value="<?php echo e($scope->value ? make_carbon($scope->value)->isoFormat($pickerFormat) : ''); ?>"
            placeholder="<?php echo app('translator')->get($scope->label); ?>"
            data-datepicker-trigger
            autocomplete="off"
            <?php echo $scope->disabled ? 'disabled="disabled"' : ''; ?>

        >
        <input
            data-datepicker-input
            type="hidden"
            name="<?php echo e($this->getScopeName($scope)); ?>"
            value="<?php echo e($scope->value); ?>"
        />
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/filter/scope_date.blade.php ENDPATH**/ ?>