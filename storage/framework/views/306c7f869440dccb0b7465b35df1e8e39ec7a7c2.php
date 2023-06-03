<?php if(isset($carteInfo['owner'])): ?>
    <div class="card-body border-bottom">
        <div class="d-flex">
            <div class="media-right media-middle">
                <i class="fa fa-globe fa-3x"></i>
            </div>
            <div class="flex-grow-1 wrap-left">
                <a
                    class="btn border pull-right"
                    onclick="$('.carte-body').slideToggle()"
                ><i class="fa fa-pencil"></i></a>
                <h3><?php echo e($carteInfo['name']); ?></h3>
                <p class="mb-1"><?php echo e($carteInfo['url']); ?></p>
                <p class="mb-1"><?php echo e($carteInfo['description'] ?? ''); ?></p>
                <p class="mb-1"><strong>Owner:</strong> <?php echo e($carteInfo['owner']); ?></p>
                <?php if(isset($carteInfo['items_count'])): ?>
                    <p class="mb-1"><strong>Total Items:</strong> <?php echo e($carteInfo['items_count']); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/app/system/views/updates/carte_info.blade.php ENDPATH**/ ?>