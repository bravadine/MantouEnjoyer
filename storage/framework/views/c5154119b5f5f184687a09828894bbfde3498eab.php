<?php if($mapAreas): ?>
    <div
        id="<?php echo e($this->getId('areas')); ?>"
        class="map-areas"
        aria-multiselectable="true"
        data-control="areas"
    >
        <?php $__currentLoopData = $mapAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mapArea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $this->makePartial('maparea/area', ['index' => $index, 'area' => $mapArea]); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <div class="card shadow-sm bg-light border-warning text-warning">
        <div class="card-body">
            <b><?php echo app('translator')->get('admin::lang.locations.alert_delivery_area'); ?></b>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/formwidgets/maparea/areas.blade.php ENDPATH**/ ?>