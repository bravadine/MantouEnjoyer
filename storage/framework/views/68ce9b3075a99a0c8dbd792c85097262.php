<ul class="social-icons list-inline">
    <?php $__currentLoopData = $socialIcons = $this->theme->social ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a
                class="p-2 <?php echo e(array_get($icon, 'class')); ?>"
                target="_blank"
                title="<?php echo e(array_get($icon, 'title')); ?>"
                href="<?php echo e(array_get($icon, 'url')); ?>">
            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
