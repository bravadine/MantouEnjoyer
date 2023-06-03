<?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widgetAlias => $widgetInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $this->makePartial('widget_item', [
        'widgetAlias' => $widgetAlias,
        'widget'      => $widgetInfo['widget'],
        'priority'    => $widgetInfo['priority'],
    ]); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/app/admin/widgets/dashboardcontainer/widget_list.blade.php ENDPATH**/ ?>