<?php if($this->previewMode): ?>
    <div class="form-control-static"><?php echo $value; ?></div>
<?php else: ?>
    <div
        class="field-codeeditor size-<?php echo e($size); ?>"
        data-control="code-editor"
        data-mode="<?php echo e($mode); ?>"
        data-theme="<?php echo e($theme); ?>"
        data-line-separator="<?php echo e($lineSeparator); ?>"
        data-read-only="<?php echo e($readOnly); ?>"
        data-height="<?php echo e($size == 'small' ? 250 : 520); ?>"
    >
        <textarea
            name="<?php echo e($name); ?>"
            id="<?php echo e($this->getId('textarea')); ?>"
            rows="20"
            class="form-control"
        ><?php echo e(trim($value)); ?></textarea>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/formwidgets/codeeditor/codeeditor.blade.php ENDPATH**/ ?>