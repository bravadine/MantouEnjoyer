<select
    name="time"
    id="time"
    class="form-select"
>
    <?php $__currentLoopData = $timeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($value->fullyBooked) continue; ?>
        <option
            value="<?php echo e($value->rawTime); ?>"
            <?php echo set_select('time', $value->rawTime); ?>

        ><?php echo e($value->time); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

