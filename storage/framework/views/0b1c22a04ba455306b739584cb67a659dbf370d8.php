<div class="dashboard-widget widget-onboarding">
    <h6 class="widget-title"><?php echo app('translator')->get($this->property('title')); ?></h6>
    <div class="row">
        <div class="list-group list-group-flush w-100">
            <?php $__currentLoopData = $onboarding->listSteps(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(($completed = $step->completed) && $completed()): ?>
                    <div class="list-group-item bg-transparent">
                        <i class="fa fa-check-circle-o fa-2x text-success float-left mr-3 my-2"></i>
                        <s class="d-block text-truncate"><?php echo app('translator')->get($step->label); ?></s>
                        <s class="text-muted d-block text-truncate"><?php echo app('translator')->get($step->description); ?></s>
                    </div>
                <?php else: ?>
                    <a class="list-group-item bg-transparent" href="<?php echo e($step->url); ?>">
                    <span class="fa-stack float-left mr-3 my-2">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa <?php echo app('translator')->get($step->icon); ?> fa-stack-1x fa-inverse"></i>
                    </span>
                        <b class="d-block text-truncate"><?php echo app('translator')->get($step->label); ?></b>
                        <span class="text-muted d-block text-truncate"><?php echo app('translator')->get($step->description); ?></span>
                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/dashboardwidgets/onboarding/onboarding.blade.php ENDPATH**/ ?>