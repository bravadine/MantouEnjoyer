<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card <?php echo e(($record->status) ? 'bg-light shadow-sm' : 'disabled'); ?> mb-3">
        <div class="card-body p-3">
            <div class="row align-items-center">
                <div class="col-md-auto">
                    <span
                        class="extension-icon rounded"
                        style="<?php echo e($record->icon['styles'] ?? ''); ?>"
                    ><i class="<?php echo e($record->icon['class'] ?? ''); ?>"></i></span>
                </div>
                <div class="list-action col-md-auto">
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($column->type != 'button') continue; ?>
                        <?php if(($key == 'install' && $record->status) || ($key == 'uninstall' && !$record->status)) continue; ?>
                        <?php echo $this->makePartial('lists/list_button', ['record' => $record, 'column' => $column]); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($column->type == 'button') continue; ?>
                    <div class="col">
                        <?php echo $this->getColumnValue($record, $column); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/app/system/views/extensions/lists/list_body.blade.php ENDPATH**/ ?>