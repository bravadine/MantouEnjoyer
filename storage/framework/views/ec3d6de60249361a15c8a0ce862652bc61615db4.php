<div
    class="control-repeater"
    data-control="repeater"
    data-append-to="#<?php echo e($this->getId('append-to')); ?>"
    data-sortable-container="#<?php echo e($this->getId('append-to')); ?>"
    data-sortable-handle=".<?php echo e($this->getId('items')); ?>-handle">

    <div id="<?php echo e($this->getId('items')); ?>" class="repeater-items">
        <div class="table-responsive">
            <table
                class="table <?php echo e(($sortable) ? 'is-sortable' : ''); ?> mb-0">
                <thead>
                <tr>
                    <?php if(!$this->previewMode && $sortable): ?>
                        <th class="list-action"></th>
                    <?php endif; ?>
                    <?php if(!$this->previewMode && $showRemoveButton): ?>
                        <th class="list-action"></th>
                    <?php endif; ?>
                    <?php $__currentLoopData = $this->getVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($label ? lang($label) : ''); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                </thead>
                <tbody id="<?php echo e($this->getId('append-to')); ?>">
                <?php $__empty_1 = true; $__currentLoopData = $this->formWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $this->makePartial('repeater/repeater_item', [
                        'widget' => $widget,
                        'indexValue' => $index,
                    ]); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr class="repeater-item-placeholder">
                        <td colspan="99" class="text-center"><?php echo e(is_lang_key($emptyMessage) ? lang($emptyMessage) : $emptyMessage); ?></td>
                    </tr>
                <?php endif; ?>
                </tbody>
                <?php if($showAddButton && !$this->previewMode): ?>
                    <tfoot>
                    <tr>
                        <th colspan="99">
                            <div class="list-action">
                                <button
                                    class="btn btn-primary"
                                    data-control="add-item"
                                    type="button">
                                    <i class="fa fa-plus"></i>
                                    <?php echo e($prompt ? lang($prompt) : ''); ?>

                                </button>
                            </div>
                        </th>
                    </tr>
                    </tfoot>
                <?php endif; ?>
            </table>
        </div>
    </div>

    <script
        type="text/template"
        data-find="<?php echo e($indexSearch); ?>"
        data-replace="<?php echo e($nextIndex); ?>"
        data-repeater-template>
        <?php echo $this->makePartial('repeater/repeater_item', ['widget' => $widgetTemplate, 'indexValue' => $indexSearch]); ?>

    </script>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/repeater/repeater.blade.php ENDPATH**/ ?>