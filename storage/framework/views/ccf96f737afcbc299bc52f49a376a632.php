<div id="menu<?php echo e($menuItem->menu_id); ?>" class="menu-item">
    <div class="d-flex flex-row">
        <?php if($showMenuImages == 1 && $menuItemObject->hasThumb): ?>
            <div
                class="col-3 p-0 me-3 menu-item-image align-self-center"
                style="
                    background: url('<?php echo e($menuItem->getThumb()); ?>') no-repeat center center;
                    background-size: cover;
                    width: <?php echo e($menuImageWidth); ?>px;
                    height: <?php echo e($menuImageHeight); ?>px;
                    ">
            </div>
        <?php endif; ?>

        <div class="menu-content flex-grow-1 me-3">
            <h6 class="menu-name"><?php echo e($menuItem->menu_name); ?></h6>
            <p class="menu-desc text-muted mb-0">
                <?php echo nl2br($menuItem->menu_description); ?>

            </p>
        </div>
        <div class="menu-detail d-flex justify-content-end col-3 p-0">
            <?php if($menuItemObject->specialIsActive): ?>
                <div class="menu-meta text-muted pe-2">
                    <i
                        class="fa fa-star text-warning"
                        title="<?php echo sprintf(lang('igniter.local::default.text_end_elapsed'), $menuItemObject->specialDaysRemaining); ?>"
                    ></i>
                </div>
            <?php endif; ?>

            <div class="menu-price pe-3">
                <?php if($menuItemObject->specialIsActive): ?>
                    <s><?php echo currency_format($menuItemObject->menuPriceBeforeSpecial); ?></s>
                <?php endif; ?>
                <?php echo $menuItemObject->menuPrice > 0
                    ? '<b>'.currency_format($menuItemObject->menuPrice).'</b>'
                    : sprintf(lang('igniter.local::default.text_price_form'), '<b>'.currency_format($menuItem->menu_price_from).'</b>'); ?>

            </div>

            <?php if(isset($updateCartItemEventHandler)): ?>
                <div class="menu-button">
                    <?php echo controller()->renderPartial('@button', ['menuItem' => $menuItem, 'menuItemObject' => $menuItemObject ]); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="layout-scrollable w-100">
        <div class="d-flex align-items-center py-2 allergens">
            <?php echo controller()->renderPartial('@allergens', ['menuItem' => $menuItem, 'menuItemObject' => $menuItemObject]); ?>
        </div>
    </div>
</div>

