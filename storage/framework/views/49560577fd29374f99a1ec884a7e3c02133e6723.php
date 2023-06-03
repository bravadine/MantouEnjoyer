<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <?php if($showDragHandle): ?>
            <td class="list-action">
                <div class="btn btn-handle">
                    <i class="fa fa-arrows-alt-v"></i>
                </div>
            </td>
        <?php endif; ?>

        <?php if($showCheckboxes): ?>
            <td class="list-action">
                <div class="form-check">
                    <input
                        type="checkbox"
                        id="<?php echo e('checkbox-'.$record->getKey()); ?>"
                        class="form-check-input"
                        value="<?php echo e($record->getKey()); ?>" name="checked[]"
                    />
                    <label class="form-check-label" for="<?php echo e('checkbox-'.$record->getKey()); ?>">&nbsp;</label>
                </div>
            </td>
        <?php endif; ?>

        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($column->type != 'button') continue; ?>
            <td class="list-action <?php echo e($column->cssClass); ?>">
                <?php echo $this->makePartial('lists/list_button', ['record' => $record, 'column' => $column]); ?>

            </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($column->type == 'button') continue; ?>
            <td
                class="list-col-index-<?php echo e($loop->index); ?> list-col-name-<?php echo e($column->getName()); ?> list-col-type-<?php echo e($column->type); ?> <?php echo e($column->cssClass); ?>"
            >
                <?php echo $this->getColumnValue($record, $column); ?>

            </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($showFilter): ?>
            <td class="list-setup">&nbsp;</td>
        <?php endif; ?>

        <?php if($showSetup): ?>
            <td class="list-setup">&nbsp;</td>
        <?php endif; ?>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/app/admin/widgets/lists/list_body.blade.php ENDPATH**/ ?>