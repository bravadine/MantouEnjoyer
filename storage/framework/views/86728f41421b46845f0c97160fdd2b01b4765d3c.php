<div
    class="input-group control-colorpicker dropend"
    data-control="colorpicker"
>
    <label class="input-group-text border-none p-0">
        <input
            id="<?php echo e($this->getId('input')); ?>"
            class="form-control form-control-color p-0"
            type="color"
            name="<?php echo e($name); ?>"
            value="<?php echo e($value); ?>"
            title="Choose your color"
            <?php echo ($this->disabled || $this->previewMode) ? 'disabled="disabled"' : ''; ?>

            <?php echo ($this->readOnly) ? 'readonly="readonly"' : ''; ?>

        />
    </label>
    <button
        class="btn btn-outline-secondary dropdown-toggle"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    ></button>
    <ul class="dropdown-menu dropdown-menu-end">
        <?php $__currentLoopData = $availableColors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-2">
                <button
                    class="dropdown-item"
                    type="button"
                    data-swatches-color="<?php echo e($color); ?>"
                    style="background-color: <?php echo e($color); ?>;"
                ></button>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/colorpicker/colorpicker.blade.php ENDPATH**/ ?>