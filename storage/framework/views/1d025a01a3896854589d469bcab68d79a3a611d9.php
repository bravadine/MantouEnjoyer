<?php
    $itemOptions = (isset($hasPartial) && $hasPartial) ? [] : $item->options();
    is_array($itemOptions) || $itemOptions = [];
?>
<li
    id="<?php echo e($item->getId()); ?>"
    class="nav-item dropdown">
    <a <?php echo $item->getAttributes(); ?>>
        <i class="fa <?php echo e($item->icon); ?>" role="button"></i>
        <?php if($item->unreadCount()): ?>
            <span class="badge <?php echo e($item->badge); ?>">&nbsp;</span>
        <?php endif; ?>
    </a>

    <ul
        class="dropdown-menu <?php echo e($item->optionsView); ?>"
        <?php if(strlen($item->partial)): ?> data-request-options="<?php echo e($item->itemName); ?>" <?php endif; ?>
    >
        <?php if(!strlen($item->partial)): ?>
            <li class="dropdown-header"><?php if($item->label): ?> <?php echo app('translator')->get($item->label); ?> <?php endif; ?></li>
            <?php $__currentLoopData = $itemOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a class="menu-link" href="<?php echo e($key); ?>"><?php echo app('translator')->get($value); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <li class="dropdown-header"><?php if($item->label): ?> <?php echo app('translator')->get($item->label); ?> <?php endif; ?></li>
            <li
                id="<?php echo e($item->getId($item->itemName.'-options')); ?>"
                class="dropdown-body">
                <p class="wrap-all text-muted text-center"><span class="ti-loading spinner-border fa-3x fa-fw"></span>
                </p>
            </li>
        <?php endif; ?>
        <li class="dropdown-footer">
            <?php if($item->viewMoreUrl): ?>
                <a class="text-center" href="<?php echo e($item->viewMoreUrl); ?>"><i class="fa fa-ellipsis-h"></i></a>
            <?php endif; ?>
        </li>
    </ul>
</li>
<?php /**PATH /var/www/html/app/admin/widgets/menu/item_dropdown.blade.php ENDPATH**/ ?>