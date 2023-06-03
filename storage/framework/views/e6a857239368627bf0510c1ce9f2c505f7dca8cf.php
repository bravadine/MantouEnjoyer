<tr
    class="list-header"
>
    <?php if($showDragHandle): ?>
        <th class="list-action"></th>
    <?php endif; ?>

    <?php if($showCheckboxes): ?>
        <th class="list-action text-nowrap">
            <div class="form-check">
                <input
                    type="checkbox" id="<?php echo e('checkboxAll-'.$listId); ?>"
                    class="form-check-input" onclick="$('input[name*=\'checked\']').prop('checked', this.checked)"/>
                <label class="form-check-label" for="<?php echo e('checkboxAll-'.$listId); ?>">&nbsp;</label>
            </div>
        </th>
    <?php endif; ?>

    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($column->type == 'button'): ?>
            <th class="list-action <?php echo e($column->cssClass); ?> text-nowrap"></th>
        <?php elseif($showSorting && $column->sortable): ?>
            <th
                class="list-cell-name-<?php echo e($column->getName()); ?> list-cell-type-<?php echo e($column->type); ?> <?php echo e($column->cssClass); ?> text-nowrap"
                <?php if($column->width): ?> style="width: <?php echo e($column->width); ?>" <?php endif; ?>>
                <a
                    class="sort-col"
                    data-request="<?php echo e($this->getEventHandler('onSort')); ?>"
                    data-request-form="#list-form"
                    data-request-data="sort_by: '<?php echo e($column->columnName); ?>'">
                    <?php echo e($this->getHeaderValue($column)); ?>

                    <i class="fa fa-sort-<?php echo e(($sortColumn == $column->columnName) ? strtoupper($sortDirection).' active' : 'ASC'); ?>"></i>
                </a>
            </th>
        <?php else: ?>
            <th
                class="list-cell-name-<?php echo e($column->getName()); ?> list-cell-type-<?php echo e($column->type); ?> text-nowrap"
                <?php if($column->width): ?> style="width: <?php echo e($column->width); ?>" <?php endif; ?>
            >
                <span><?php echo e($this->getHeaderValue($column)); ?></span>
            </th>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($showFilter): ?>
        <th class="list-setup">
            <button
                type="button"
                class="btn btn-outline-default btn-sm border-none"
                title="<?php echo app('translator')->get('admin::lang.button_filter'); ?>"
                data-toggle="list-filter"
                data-target=".list-filter"
            ><i class="fa fa-filter"></i></button>
        </th>
    <?php endif; ?>
    <?php if($showSetup): ?>
        <th class="list-setup">
            <button
                type="button"
                class="btn btn-outline-default btn-sm border-none"
                title="<?php echo app('translator')->get('admin::lang.list.text_setup'); ?>"
                data-bs-toggle="modal"
                data-bs-target="#<?php echo e($listId); ?>-setup-modal"
                data-request="<?php echo e($this->getEventHandler('onLoadSetup')); ?>"
            ><i class="fa fa-sliders"></i></button>
        </th>
    <?php endif; ?>
</tr>
<?php /**PATH /var/www/html/app/admin/widgets/lists/list_head.blade.php ENDPATH**/ ?>