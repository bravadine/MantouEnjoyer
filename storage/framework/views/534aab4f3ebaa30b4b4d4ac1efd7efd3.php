<ul id="nav-tabs" class="nav-menus nav nav-tabs py-2">
    <li class="nav-item">
        <a
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link rounded-pill py-1 fw-bold', 'text-muted' => $activeTab !== 'menus', 'active' => $activeTab === 'menus']) ?>"
            href="<?php echo e(restaurant_url('local/menus')); ?>"
        ><?php echo app('translator')->get('main::lang.local.text_tab_menu'); ?></a>
    </li>
    <?php if($showReviews): ?>
        <li class="nav-item">
            <a
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link rounded-pill py-1 fw-bold', 'text-muted' => $activeTab !== 'reviews', 'active' => $activeTab === 'reviews']) ?>"
                class="nav-item nav-link <?php echo e(($activeTab === 'reviews') ? 'active' : ''); ?>"
                href="<?php echo e(restaurant_url('local/reviews')); ?>"
            ><?php echo app('translator')->get('main::lang.local.text_tab_review'); ?></a>
        </li>
    <?php endif; ?>
    <li class="nav-item">
        <a
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link rounded-pill py-1 fw-bold', 'text-muted' => $activeTab !== 'info', 'active' => $activeTab === 'info']) ?>"
            href="<?php echo e(restaurant_url('local/info')); ?>"
        ><?php echo app('translator')->get('main::lang.local.text_tab_info'); ?></a>
    </li>
    <?php if(isset($locationCurrent) && $locationCurrent->hasGallery()): ?>
        <li class="nav-item">
            <a
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link rounded-pill py-1 fw-bold', 'text-muted' => $activeTab !== 'gallery', 'active' => $activeTab === 'gallery']) ?>"
                href="<?php echo e(restaurant_url('local/gallery')); ?>"
            ><?php echo app('translator')->get('main::lang.local.text_tab_gallery'); ?></a>
        </li>
    <?php endif; ?>
</ul>
