<div class="media-image<?php echo e($isMulti ? ' image-list' : ''); ?>">
    <?php if(count($value)): ?>
        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $this->makePartial('mediafinder/image_'.$mode, ['mediaItem' => $mediaItem]); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <?php echo $this->makePartial('mediafinder/image_'.$mode, ['mediaItem' => null]); ?>

    <?php endif; ?>
</div>

<script type="text/template" data-blank-template>
    <?php echo $this->makePartial('mediafinder/image_'.$mode, ['mediaItem' => null]); ?>

</script>

<script type="text/template" data-image-template>
    <?php echo $this->makePartial('mediafinder/image_'.$mode, ['mediaItem' => '']); ?>

</script>
<?php /**PATH /var/www/html/app/admin/formwidgets/mediafinder/image.blade.php ENDPATH**/ ?>