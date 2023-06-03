<?php $__currentLoopData = $menuItem->allergens->where('status', 1) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allergen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <span
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'badge bg-light text-dark fw-normal rounded-pill shadow-sm px-2',
            'py-2' => !$allergen->hasMedia('thumb'),
            'me-2' => !$loop->last
        ]) ?>"
        data-bs-toggle="tooltip"
        title="<?php echo e($allergen->name); ?>: <?php echo e($allergen->description); ?>"
    >
        <?php if($allergen->hasMedia('thumb')): ?>
            <img
                class="img-fluid rounded-pill"
                alt="<?php echo e($allergen->name); ?>"
                src="<?php echo e($allergen->getThumb(['width' => $menuAllergenImageWidth, 'height' => $menuAllergenImageHeight])); ?>"
            />
        <?php endif; ?>
        <?php echo e($allergen->name); ?>

    </span>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

