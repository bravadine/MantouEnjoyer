<div class="card">
    <div class="nav flex-column">
        <?php $__currentLoopData = $pagesSideMenu->menuItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $topItem->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                    <a
                        class="nav-link<?php echo e(($item->isActive || $item->isChildActive) ? ' active fw-bold' : ''); ?>"
                        href="<?php echo e($item->url); ?>"
                        <?php echo $item->extraAttributes; ?>

                    ><?php echo app('translator')->get($item->title); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
