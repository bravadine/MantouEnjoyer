<ul
    id="<?php echo e($this->getId()); ?>"
    class="navbar-nav"
    data-control="mainmenu"
    data-alias="<?php echo e($this->alias); ?>"
>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $this->renderItemElement($item); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/html/app/admin/widgets/menu/top_menu.blade.php ENDPATH**/ ?>