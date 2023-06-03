<div class="accordion accordion-flush mt-3" id="accordion<?php echo e($this->arrayName); ?>">
    <?php $__currentLoopData = $accordions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accordion => $fields): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo e($this->arrayName); ?><?php echo e($loop->index); ?>">
                <button
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['accordion-button bg-transparent fw-bold', 'collapsed' => !$loop->first]) ?>"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse<?php echo e($this->arrayName); ?><?php echo e($loop->index); ?>"
                    aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>"
                    aria-controls="collapse<?php echo e($this->arrayName); ?><?php echo e($loop->index); ?>"
                ><?php echo app('translator')->get($accordion); ?></button>
            </h2>
            <div
                id="collapse<?php echo e($this->arrayName); ?><?php echo e($loop->index); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['accordion-collapse collapse', 'show' => $loop->first]) ?>"
                aria-labelledby="heading<?php echo e($this->arrayName); ?><?php echo e($loop->index); ?>"
                data-bs-parent="#accordion<?php echo e($this->arrayName); ?>"
            >
                <div class="accordion-body p-0">
                    <div class="form-fields mb-0">
                        <?php echo $this->makePartial('form/form_fields', ['fields' => $fields]); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/app/admin/views/locations/form/form_accordions.blade.php ENDPATH**/ ?>