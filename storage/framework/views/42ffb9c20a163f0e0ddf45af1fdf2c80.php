<div class="menu-items">
    <?php $__empty_1 = true; $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItemObject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo controller()->renderPartial('@item', ['menuItem' => $menuItemObject->model, 'menuItemObject' => $menuItemObject]); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p><?php echo app('translator')->get('igniter.local::default.text_empty'); ?></p>
    <?php endif; ?>
</div>

