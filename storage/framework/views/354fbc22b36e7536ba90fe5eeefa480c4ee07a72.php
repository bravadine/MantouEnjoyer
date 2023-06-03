<?php
    $fieldOptions = $field->options();
?>
<div
    class="field-timesheet"
    data-control="timesheet"
    data-days='<?php echo json_encode($fieldOptions->daysOfWeek, 15, 512) ?>'
    data-values='<?php echo json_encode($fieldOptions->timesheet, 15, 512) ?>'
    data-field-name="<?php echo e($field->getName()); ?>"
    data-cell-duration="<?php echo e($field->getConfig('cellDuration', '60')); ?>"
>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead></thead>
            <tbody
                class="timesheet-editor"
            ></tbody>
        </table>
    </div>
</div>
<input type="hidden" name="<?php echo e($field->getName()); ?>">
<?php /**PATH /var/www/html/app/admin/views/locations/form/timesheet.blade.php ENDPATH**/ ?>