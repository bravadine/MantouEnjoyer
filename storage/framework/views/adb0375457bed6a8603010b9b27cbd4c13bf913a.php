<div class="container-fluid pt-4">
    <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!count($categories)) continue; ?>
        <?php if (! ($item == 'core')): ?><h5 class="mb-2 px-3"><?php echo e(ucwords($item)); ?></h5><?php endif; ?>

        <div class="row no-gutters mb-3">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <a
                        class="text-reset d-block p-3 h-100"
                        href="<?php echo e($category->url); ?>"
                        role="button"
                    >
                        <div class="card bg-light shadow-sm h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="pr-3">
                                    <h5>
                                        <div class="rounded-circle bg-light">
                                            <?php if($item == 'core' && count(array_get($settingItemErrors, $category->code, []))): ?>
                                                <i
                                                    class="text-danger fa fa-exclamation-triangle fa-fw"
                                                    title="<?php echo app('translator')->get('system::lang.settings.alert_settings_errors'); ?>"
                                                ></i>
                                            <?php elseif($category->icon): ?>
                                                <i class="text-muted <?php echo e($category->icon); ?> fa-fw"></i>
                                            <?php else: ?>
                                                <i class="text-muted fa fa-puzzle-piece fa-fw"></i>
                                            <?php endif; ?>
                                        </div>
                                    </h5>
                                </div>
                                <div class="">
                                    <h5><?php echo app('translator')->get($category->label); ?></h5>
                                    <p class="no-margin text-muted"><?php echo $category->description ? lang($category->description) : ''; ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH /var/www/html/app/system/views/settings/index.blade.php ENDPATH**/ ?>