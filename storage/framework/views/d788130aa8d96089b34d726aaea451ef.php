<div class="py-5">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $footerMenu->menuItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3">
                    <div class="footer-links">
                        <h6 class="footer-title d-none d-sm-block"><?php echo app('translator')->get($navItem->title); ?></h6>
                        <ul>
                            <?php $__currentLoopData = $navItem->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a
                                        href="<?php echo e($item->url); ?>"
                                        <?php echo $item->extraAttributes; ?>

                                    ><?php echo app('translator')->get($item->title); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-sm-3 mt-3 mt-sm-0">
                <div class="social-bottom">
                    <h6 class="footer-title"><?php echo app('translator')->get('main::lang.text_follow_us'); ?></h6>
                    <?php echo controller()->renderPartial('social_icons', ['socialIcons' => $this->theme->social]); ?>
                </div>
            </div>

            <?php if(has_component('newsletter')): ?>
                <div class="col-sm-3 mt-3 mt-sm-0">
                    <div id="newsletter-box">
                        <h5 class="mb-4"><?php echo app('translator')->get('igniter.frontend::default.newsletter.text_subscribe'); ?></h5>
                        <?php echo controller()->renderComponent('newsletter'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <hr class="mb-3">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col p-2">
                <?php echo sprintf(
                    lang('main::lang.site_copyright'),
                    date('Y'),
                    setting('site_name'),
                    lang('system::lang.system_name')
                ).lang('system::lang.system_powered'); ?>

            </div>
        </div>
    </div>
</div>
