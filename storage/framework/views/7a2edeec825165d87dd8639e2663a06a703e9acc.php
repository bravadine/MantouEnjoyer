<div class="card-counter <?php echo e($statsContext); ?>">
    <i class="stat-icon <?php echo e($statsIcon); ?>"></i>
    <span class="stat-number"><?php echo e($statsCount); ?></span>
    <span class="stat-text"><?php echo app('translator')->get($statsLabel); ?></span>
</div>
<?php /**PATH /var/www/html/app/admin/dashboardwidgets/statistics/statistics.blade.php ENDPATH**/ ?>