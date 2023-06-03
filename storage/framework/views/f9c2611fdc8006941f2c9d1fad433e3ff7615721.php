<?php if($this->previewMode): ?>
    <div class="form-control-static"><?php echo e($value ? $value->format($formatAlias) : null); ?></div>
<?php else: ?>

    <div
        id="<?php echo e($this->getId()); ?>"
        class="control-datepicker"
    >
        <?php echo $this->makePartial('datepicker/picker_'.$mode); ?>

    </div>

<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/formwidgets/datepicker/datepicker.blade.php ENDPATH**/ ?>