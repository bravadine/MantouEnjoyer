<div class="d-flex flex-nowrap overflow-auto">
    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheduleCode => $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 <?php echo e($loop->first ? 'py-2 pr-2 pl-0' : 'p-2'); ?>">
            <div
                id="<?php echo e($this->getId('item-'.$loop->iteration)); ?>"
                class="card bg-light shadow-sm mb-0"
                data-editor-control="load-schedule"
                data-schedule-code="<?php echo e($scheduleCode); ?>"
                role="button"
            >
                <div class="card-body">
                    <div class="flex-fill">
                        <h5 class="card-title"><?php echo e(lang($schedule->name).' '.lang('admin::lang.locations.text_schedule')); ?></h5>
                        <p class="card-text"><?php echo e(lang('admin::lang.locations.text_'.$schedule->type)); ?></p>
                    </div>

                    <div class="pt-3">
                        <?php $__currentLoopData = $schedule->getFormatted(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex pb-2">
                                <div class="col-5 p-0 text-muted"><?php echo e($value->day); ?></div>
                                <div class="col-7 p-0 text-right text-nowrap text-truncate">
                                    <span title="<?php echo e($value->hours); ?>"><?php echo e($value->hours); ?></span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/scheduleeditor/schedules.blade.php ENDPATH**/ ?>