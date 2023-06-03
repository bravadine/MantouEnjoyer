<a class="navbar-brand" href="<?php echo e(page_url('home')); ?>">
    <?php if($this->theme->logo_image): ?>
        <img
            class="img-logo"
            alt="<?php echo e(setting('site_name')); ?>"
            src="<?php echo e(uploads_url($this->theme->logo_image)); ?>"
        />
    <?php elseif($this->theme->logo_text): ?>
        <span class="text-logo"><?php echo e($this->theme->logo_text); ?></span>
    <?php else: ?>
        <img
            class="img-logo"
            alt="<?php echo e(setting('site_name')); ?>"
            src="<?php echo e(uploads_url(setting('site_logo'))); ?>"
        />
    <?php endif; ?>
</a>
