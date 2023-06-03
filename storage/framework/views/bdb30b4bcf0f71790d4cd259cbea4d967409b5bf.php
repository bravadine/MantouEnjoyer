<div class="dashboard-widget widget-news">
    <h6 class="widget-title"><?php echo app('translator')->get($this->property('title')); ?></h6>
    <div class="row">
        <div class="list-group list-group-flush w-100">
            <?php $__empty_1 = true; $__currentLoopData = $newsFeed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a class="list-group-item" target="_blank" href="<?php echo e($feed['link']); ?>">
                    <b class="d-block text-truncate"><?php echo e($feed['title']); ?></b>
                    <span class="text-muted d-block text-truncate"><?php echo e(strip_tags($feed['description'])); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="mt-3">
                    <p class="text-danger">
                        <?php echo app('translator')->get('admin::lang.dashboard.error_rss'); ?>
                        <a href="javascript:location.reload();">
                            <?php echo app('translator')->get('admin::lang.text_reload'); ?>
                        </a>.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/system/dashboardwidgets/news/news.blade.php ENDPATH**/ ?>