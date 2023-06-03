<div class="row-fluid">
    <?php echo form_open(current_url(),
        [
            'id'     => 'list-form',
            'role'   => 'form',
            'method' => 'POST',
        ]
    ); ?>


    <?php echo $this->widgets['toolbar']->render(); ?>


    <div class="list-table table-responsive">
        <table class="table table-hover border-bottom">
            <thead>
            <tr>
                <th width="10%">Level</th>
                <th width="15%">Date</th>
                <th>Content</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-<?php echo e($log['class']); ?>">
                        <span
                            class="fa fa-<?php echo e($log['icon']); ?>"
                            aria-hidden="true"
                        ></span>&nbsp;&nbsp;<?php echo e($log['level']); ?>

                    </td>
                    <td class="date"><?php echo e(date('Y-m-d H:i:s', strtotime($log['date']))); ?></td>
                    <td
                        class="text"
                        <?php if($log['stack']): ?>
                        role="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#stack-<?php echo e($key); ?>"
                        aria-expanded="false"
                        aria-controls="stack<?php echo e($key); ?>"
                        <?php endif; ?>
                    >
                        <?php echo e($log['text']); ?>


                        <?php if(isset($log['summary'])): ?>
                            <br/> <?php echo e($log['summary']); ?>

                        <?php endif; ?>

                        <?php if($log['stack']): ?>
                            <div class="collapse" id="stack-<?php echo e($key); ?>">
                                <?php echo nl2br(trim(e($log['stack']))); ?>

                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <?php echo form_close(); ?>

</div>
<?php /**PATH /var/www/html/app/system/views/systemlogs/index.blade.php ENDPATH**/ ?>