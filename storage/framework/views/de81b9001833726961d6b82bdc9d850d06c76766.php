<div id="<?php echo e($this->getId()); ?>" class="dashboard-widget widget-cache">
    <h6 class="widget-title"><?php echo app('translator')->get($this->property('title')); ?></h6>

    <span><?php echo app('translator')->get('admin::lang.dashboard.text_total_cache'); ?><b><?php echo e($formattedTotalCacheSize); ?></b></span>
    <div class="progress mb-3" style="height: 25px;">
        <?php $__currentLoopData = $cacheSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cacheInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                class="progress-bar progress-bar-animated p-2"
                role="progressbar"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="<?php echo e($cacheInfo->label); ?>"
                aria-valuenow="<?php echo e($cacheInfo->size); ?>"
                aria-valuemin="0"
                aria-valuemax="<?php echo e($totalCacheSize); ?>"
                style="<?php echo e('background-color: '.$cacheInfo->color.'; width: '.$cacheInfo->size.'%'); ?>"
            ><b><?php echo e($cacheInfo->formattedSize); ?></b></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button
        type="button"
        data-request="<?php echo e($this->getEventHandler('onClearCache')); ?>"
        data-request-success="$('#cache-sizes').replaceWith(data.partial)"
        class="btn btn-default"
    ><i class="fa fa-trash"></i>&nbsp;&nbsp;<?php echo app('translator')->get('admin::lang.text_clear'); ?></button>
</div>
<?php /**PATH /var/www/html/app/system/dashboardwidgets/cache/cache.blade.php ENDPATH**/ ?>