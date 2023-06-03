<?php $__currentLoopData = Flash::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($message['overlay']): ?>
        <div
            data-control="flash-overlay"
            data-title="<?php echo e(array_get($message, 'title')); ?>"
            data-text="<?php echo array_get($message, 'message'); ?>"
            data-icon="<?php echo e($message['level']); ?>"
            data-close-on-click-outside="<?php echo e($message['important'] ? 'false' : 'true'); ?>"
            data-close-on-esc="<?php echo e($message['important'] ? 'false' : 'true'); ?>"
        ></div>
    <?php else: ?>
        <div
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['alert alert-'.$message['level'], 'alert-important' => $message['important']]) ?>"
            data-control="flash-message"
            data-allow-dismiss="<?php echo e($message['important'] ? 'false' : 'true'); ?>"
            role="alert"
        ><?php echo $message['message']; ?></div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if($messages = session('admin_errors', collect())->all()): ?>
    <div
        class="alert alert-danger"
        data-control="flash-message"
        data-allow-dismiss="false"
        role="alert"
    >
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo $message; ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php
        session()->forget('admin_errors')
    ?>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/views/_partials/flash.blade.php ENDPATH**/ ?>