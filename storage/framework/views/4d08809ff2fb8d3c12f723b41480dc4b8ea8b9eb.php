<?php if($button->type === 'dropdown'): ?>
    <div class="dropdown d-inline-block">
        <button
            type="button"
            tabindex="0"
            class="py-1 <?php echo e($button->cssClass); ?> dropdown-toggle"
            data-bs-toggle="dropdown"
            <?php echo $button->getAttributes(); ?>

        ><?php echo $button->label ?: $button->name; ?></button>
        <?php if($buttonMenuItems = $button->menuItems()): ?>
            <div class="dropdown-menu">
                <?php $__currentLoopData = $buttonMenuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buttonObj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $this->renderBulkActionButton($buttonObj); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php else: ?>
    <button
        type="button"
        class="py-1 <?php echo e($button->cssClass); ?>"
        <?php echo $button->getAttributes(); ?>

        data-control="bulk-action"
        data-attach-loading=""
        data-request="<?php echo e($this->getEventHandler('onBulkAction')); ?>"
        data-request-data="code: '<?php echo e($button->name); ?>'<?php echo e($button->name === 'delete' ? ",_method:'DELETE'" : ''); ?>"
        data-request-form="#list-form"
        tabindex="0"
    ><?php echo $button->label ?: $button->name; ?></button>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/lists/list_action_button.blade.php ENDPATH**/ ?>