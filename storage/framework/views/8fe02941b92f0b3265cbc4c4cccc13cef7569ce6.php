<div class="d-flex w-100 align-items-center">
    <div
        class="flex-grow-1"
        <?php if($record->class && strlen($record->readme)): ?>
        data-bs-toggle="modal"
        data-bs-target="#extension-modal-<?php echo e($record->extension_id); ?>"
        role="button"
        <?php endif; ?>
    >
        <span class="extension-name font-weight-bold <?php if (! ($record->class)): ?> text-muted <?php endif; ?>">
            <?php if (! ($record->class)): ?><s><?php echo e($record->title); ?></s><?php else: ?><?php echo e($record->title); ?><?php endif; ?>
        </span>&nbsp;&nbsp;
        <span class="small text-muted"><?php echo e($record->version); ?></span>
        <p class="extension-desc mb-0 text-muted"><?php echo e($record->description); ?></p>
    </div>
    <div class="text-muted text-right small">
        <b><?php echo app('translator')->get('system::lang.extensions.text_author'); ?></b><br/>
        <?php echo e($record->meta['author'] ?? ''); ?>

    </div>
</div>
<?php if($record->class && strlen($record->readme)): ?>
    <div
        id="extension-modal-<?php echo e($record->extension_id); ?>"
        class="modal fade"
        tabindex="-1"
        role="dialog"
    >
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e($record->title); ?></h4>
                    <?php if(isset($record->meta['homepage'])): ?>
                        <a href="<?php echo e($record->meta['homepage']); ?>"><i class="fa fa-external-link fa-2x"></i></a>
                    <?php endif; ?>
                </div>
                <div class="modal-body bg-light markdown">
                    <?php echo $record->readme; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/app/system/views/extensions/lists/extension_card.blade.php ENDPATH**/ ?>