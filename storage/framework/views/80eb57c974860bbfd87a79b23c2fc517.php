<select
    name="guest"
    id="noOfGuests"
    class="form-select"
>
    <?php $__currentLoopData = $__SELF__->getGuestSizeOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
            value="<?php echo e($key); ?>"
            <?php echo set_select('guest', $key); ?>

        ><?php echo e($value); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

