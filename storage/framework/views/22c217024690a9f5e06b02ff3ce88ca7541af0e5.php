<input type="hidden" data-media-type="current-folder" value="<?php echo e($currentFolder); ?>"/>

<?php if($items): ?>
    <?php echo $this->makePartial('mediamanager/list_grid'); ?>

<?php else: ?>
    <p><?php echo app('translator')->get('admin::lang.text_empty'); ?></p>
<?php endif; ?>
<?php /**PATH /var/www/html/app/main/widgets/mediamanager/item_list.blade.php ENDPATH**/ ?>