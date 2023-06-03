<?php if($searchQueryPosition->isValid()): ?>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex">
                <h5 class="mb-0 d-inline-block flex-grow-1">
                    <i class="fa fa-map-marker"></i>&nbsp;&nbsp;
                    <?php echo e($searchQueryPosition->getLocality()); ?>

                </h5>
                <a
                    class="text-primary"
                    href="<?php echo e(page_url('home')); ?>"
                ><?php echo app('translator')->get('igniter.local::default.search.text_change'); ?></a>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="list-group list-group-flush">
        <?php $__currentLoopData = $listOrderTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="list-group-item">
                <div class="form-check">
                    <input
                        type="radio"
                        id="customRadio<?php echo e($key); ?>"
                        name="<?php echo e($orderTypeParam); ?>"
                        class="form-check-input"
                        value="<?php echo e($key); ?>"
                        data-page-url="<?php echo e($filterPageUrl); ?>"
                        <?php echo $key == $activeOrderType ? 'checked=checked' : ''; ?>

                    />
                    <label
                        class="form-check-label w-100"
                        for="customRadio<?php echo e($key); ?>"
                    ><?php echo app('translator')->get($name); ?></label>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

