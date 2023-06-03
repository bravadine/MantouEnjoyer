<div
    id="<?php echo e($sliderSelectorId); ?>"
    class="carousel slide carousel-fade"
    data-bs-ride="carousel"
>
    <?php if($showSliderIndicators): ?>
        <div class="carousel-indicators">
            <?php $__currentLoopData = $__SELF__->slides(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button
                    type="button"
                    class="<?php echo e($loop->first ? 'active' : ''); ?>"
                    data-bs-target="#<?php echo e($sliderSelectorId); ?>"
                    data-bs-slide-to="<?php echo e($loop->index); ?>"
                ></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <div class="carousel-inner">
        <?php $__currentLoopData = $__SELF__->slides(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>"
                style="max-height:<?php echo e($sliderHeight); ?>;"
            >
                <img
                    src="<?php echo e($slide->getThumb()); ?>"
                    class="d-block w-100"
                    alt="<?php echo e($slide->getCustomProperty('title')); ?>"
                />

                <?php if($showSliderCaptions && strlen($slide->getCustomProperty('description'))): ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo e($slide->getCustomProperty('title')); ?></h5>
                        <p><?php echo e($slide->getCustomProperty('description')); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if($showSliderControls && count($__SELF__->slides()) > 1): ?>
        <button
            type="button"
            class="carousel-control-prev"
            data-bs-target="#<?php echo e($sliderSelectorId); ?>"
            data-bs-slide="prev"
        ><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
        <button
            type="button"
            class="carousel-control-next"
            data-bs-target="#<?php echo e($sliderSelectorId); ?>"
            data-bs-slide="next"
        ><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
    <?php endif; ?>
</div>

