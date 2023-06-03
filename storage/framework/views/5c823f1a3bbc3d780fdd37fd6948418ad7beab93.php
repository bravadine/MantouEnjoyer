<div class="media-finder">
    <div class="grid">
        <?php if($this->previewMode): ?>
            <a>
                <div class="img-cover">
                    <img src="<?php echo e($this->getMediaThumb($mediaItem)); ?>" class="img-responsive">
                </div>
            </a>
        <?php else: ?>
            <?php if(is_null($mediaItem)): ?>
                <a class="find-button blank-cover">
                    <i class="fa fa-plus"></i>
                </a>
            <?php else: ?>
                <i class="find-remove-button fa fa-times-circle" title="<?php echo app('translator')->get('admin::lang.text_remove'); ?>"></i>
                <div class="icon-container">
                    <span data-find-name><?php echo e($this->getMediaName($mediaItem)); ?></span>
                </div>
                <a class="<?php echo e($useAttachment ? 'find-config-button' : ''); ?>">
                    <div class="img-cover">
                        <?php if(($mediaFileType = $this->getMediaFileType($mediaItem)) === 'image'): ?>
                            <img
                                data-find-image
                                src="<?php echo e($this->getMediaThumb($mediaItem)); ?>"
                                class="img-responsive"
                                alt=""
                            />
                        <?php else: ?>
                            <div class="media-icon">
                                <i
                                    data-find-file
                                    class="fa fa-<?php echo e($mediaFileType); ?> fa-3x text-muted mb-2"
                                ></i>
                            </div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>
            <input
                type="hidden"
                <?php echo (!is_null($mediaItem) && !$useAttachment) ? 'name="'.$fieldName.'"' : ''; ?>

                value="<?php echo e($this->getMediaPath($mediaItem)); ?>"
                data-find-value
            />
            <input
                type="hidden"
                value="<?php echo e($this->getMediaIdentifier($mediaItem)); ?>"
                data-find-identifier
            />
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/mediafinder/image_grid.blade.php ENDPATH**/ ?>