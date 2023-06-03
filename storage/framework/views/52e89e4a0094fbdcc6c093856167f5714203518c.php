<div class="modal fade" id="theme-preview-<?php echo e($theme->code); ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Preview Theme</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body wrap-none">
                <img src="<?php echo e($theme->screenshot); ?>" width="100%" />
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/system/views/themes/lists/screenshot.blade.php ENDPATH**/ ?>