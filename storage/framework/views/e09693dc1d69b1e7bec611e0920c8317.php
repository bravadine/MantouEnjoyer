<div class="d-flex flex-row mb-3">
    <?php $__currentLoopData = $listSorting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sorting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['btn bg-white rounded-pill text-primary shadow-sm py-1 px-3 me-2 text-decoration-none', ' border-primary active' => $key == $activeSortBy]) ?>"
            href="<?php echo e($sorting['href']); ?>"
        ><?php echo e($sorting['name']); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

