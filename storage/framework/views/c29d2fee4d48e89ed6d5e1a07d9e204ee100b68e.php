<div class="media-list row no-gutters">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="media-item col-2">
            <div
                class="media-thumb"
                data-media-item
                data-media-item-name="<?php echo e($item->name); ?>"
                data-media-item-type="<?php echo e($item->type); ?>"
                data-media-item-file-type="<?php echo e($item->fileType); ?>"
                data-media-item-path="<?php echo e($item->path); ?>"
                data-media-item-size="<?php echo e($item->sizeToString()); ?>"
                data-media-item-modified="<?php echo e($item->lastModifiedAsString()); ?>"
                data-media-item-url="<?php echo e($item->publicUrl); ?>"
                data-media-item-dimension="<?php echo e(isset($item->thumb['dimension']) ? $item['thumb']['dimension'] : '--'); ?>"
                data-media-item-folder="<?php echo e($currentFolder); ?>"
                data-media-item-data='<?php echo json_encode($item, 15, 512) ?>'
                <?php if($item->name == $selectItem || $loop->iteration == 0): ?> data-media-item-marked=""<?php endif; ?>
            >
                <a>
                    <?php if($item->fileType === 'image'): ?>
                        <img
                            alt="<?php echo e($item->name); ?>" class="img-responsive"
                            src="<?php echo e($item->publicUrl); ?>"
                        />
                    <?php else: ?>
                        <div class="media-icon">
                            <i class="fa fa-<?php echo e($item->fileType); ?> fa-3x text-muted mb-2"></i>
                            <span class="d-inline-block text-truncate mw-100"><?php echo e($item->name); ?></span>
                        </div>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/app/main/widgets/mediamanager/list_grid.blade.php ENDPATH**/ ?>