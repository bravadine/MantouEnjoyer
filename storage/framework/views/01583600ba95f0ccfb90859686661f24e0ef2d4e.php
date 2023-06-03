<?php if($showPagination): ?>
    <nav class="pagination-bar d-flex justify-content-end">
        <?php if($showPageNumbers): ?>
            <div class="align-self-center">
                <?php echo e(sprintf(lang('admin::lang.list.text_showing'), $records->firstItem() ?? 0, $records->lastItem() ?? 0, $records->total())); ?>

            </div>
        <?php endif; ?>
        <div class="pl-3">
            <?php echo $records->render(); ?>

        </div>
    </nav>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/lists/list_pagination.blade.php ENDPATH**/ ?>