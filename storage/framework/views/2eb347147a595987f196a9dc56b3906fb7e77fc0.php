<?php $__currentLoopData = $records ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (! ($theme->getTheme())): ?>
        <?php echo $this->makePartial('lists/not_found', ['theme' => $theme]); ?>

    <?php else: ?>
        <div class="row mb-3">
            <div class="d-flex align-items-center bg-light p-4 w-100">
                <?php if($theme->getTheme()->hasParent()): ?>
                    <?php echo $this->makePartial('lists/child_theme', ['theme' => $theme]); ?>

                <?php else: ?>
                    <a
                        class="media-left mr-4 preview-thumb"
                        data-bs-toggle="modal"
                        data-bs-target="#theme-preview-<?php echo e($theme->code); ?>"
                        data-img-src="<?php echo e(URL::asset($theme->screenshot)); ?>"
                        style="width:200px;">
                        <img
                            class="img-responsive img-rounded"
                            alt=""
                            src="<?php echo e(URL::asset($theme->screenshot)); ?>"
                        />
                    </a>
                    <div class="media-body">
                        <span class="h5 media-heading"><?php echo e($theme->name); ?></span>&nbsp;&nbsp;
                        <span class="small text-muted">
                            <?php echo e($theme->code); ?>&nbsp;-&nbsp;
                            <?php echo e($theme->version); ?>

                            <?php echo app('translator')->get('system::lang.themes.text_author'); ?>
                            <b><?php echo e($theme->author); ?></b>
                        </span>
                        <?php if (! ($theme->getTheme()->hasParent())): ?>
                            <p class="description text-muted mt-3"><?php echo e($theme->description); ?></p>
                        <?php endif; ?>
                        <div class="list-action align-self-end my-3">
                            <?php echo $this->makePartial('lists/list_buttons', ['theme' => $theme]); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(strlen($theme->screenshot)): ?>
                <?php echo $this->makePartial('lists/screenshot', ['theme' => $theme]); ?>

            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/app/system/views/themes/lists/list_body.blade.php ENDPATH**/ ?>