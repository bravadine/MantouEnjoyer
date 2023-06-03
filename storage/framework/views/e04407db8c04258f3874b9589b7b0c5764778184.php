<div class="media-finder">
    <div class="input-group">
        <div class="input-group-text" style="width: 50px;">
            <?php if(!is_null($mediaItem)): ?>
                <?php if(($mediaFileType = $this->getMediaFileType($mediaItem)) === 'image'): ?>
                    <img
                        data-find-image
                        src="<?php echo e($this->getMediaThumb($mediaItem)); ?>"
                        class="img-responsive"
                        width="24px"
                    >
                <?php else: ?>
                    <div class="media-icon w-100">
                        <i
                            data-find-file
                            class="fa fa-<?php echo e($mediaFileType); ?> text-muted"
                        ></i>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <span
            class="form-control<?php echo e((!is_null($mediaItem) && $useAttachment) ? ' find-config-button' : ''); ?>"
            data-find-name><?php echo e($this->getMediaName($mediaItem)); ?></span>
        <input
            id="<?php echo e($field->getId()); ?>"
            type="hidden"
            <?php echo !$useAttachment ? 'name="'.$fieldName.'"' : ''; ?>

            data-find-value
            value="<?php echo e($this->getMediaPath($mediaItem)); ?>"
            <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

        >
        <input
            type="hidden"
            value="<?php echo e($this->getMediaIdentifier($mediaItem)); ?>"
            data-find-identifier
        />
        <?php if (! ($this->previewMode)): ?>
            <button class="btn btn-outline-primary find-button<?php echo e(!is_null($mediaItem) ? ' hide' : ''); ?>" type="button">
                <i class="fa fa-picture-o"></i>
            </button>
            <button
                class="btn btn-outline-danger find-remove-button<?php echo e(!is_null($mediaItem) ? '' : ' hide'); ?>"
                type="button">
                <i class="fa fa-times-circle"></i>
            </button>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/mediafinder/image_inline.blade.php ENDPATH**/ ?>