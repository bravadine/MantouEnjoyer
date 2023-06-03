<div
    id="<?php echo e($this->getId()); ?>"
    data-control="map-area"
    data-alias="<?php echo e($this->alias); ?>"
    data-remove-handler="<?php echo e($this->getEventHandler('onDeleteArea')); ?>"
    data-sortable-container="#<?php echo e($this->getId('areas')); ?>"
    data-sortable-handle=".<?php echo e($this->getId('areas')); ?>-handle"
>
    <div class="map-area-container my-3" id="<?php echo e($this->getId('items')); ?>">
        <?php echo $this->makePartial('maparea/areas'); ?>

    </div>

    <div
        id="<?php echo e($this->getId('toolbar')); ?>"
        class="map-area-toolbar"
    >
        <?php echo $this->makePartial('maparea/toolbar'); ?>

    </div>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/maparea/maparea.blade.php ENDPATH**/ ?>