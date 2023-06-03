<div
    data-control="cart-box"
    data-load-item-handler="<?php echo e($loadCartItemEventHandler); ?>"
    data-update-item-handler="<?php echo e($updateCartItemEventHandler); ?>"
    data-apply-coupon-handler="<?php echo e($applyCouponEventHandler); ?>"
    data-apply-tip-handler="<?php echo e($applyTipEventHandler); ?>"
    data-remove-item-handler="<?php echo e($removeCartItemEventHandler); ?>"
    data-remove-condition-handler="<?php echo e($removeConditionEventHandler); ?>"
    data-refresh-cart-handler="<?php echo e($refreshCartEventHandler); ?>"
>
    <div id="cart-box" class="module-box">
        <div id="cart-items">
            <?php echo controller()->renderPartial('@items'); ?>
        </div>

        <div id="cart-coupon">
            <?php echo controller()->renderPartial('@coupon_form'); ?>
        </div>

        <?php if ($__SELF__->tippingEnabled()) { ?>
        <div id="cart-tip">
            <?php echo controller()->renderPartial('@tip_form'); ?>
        </div>
        <?php } ?>

        <div id="cart-totals">
            <?php echo controller()->renderPartial('@totals'); ?>
        </div>

        <div id="cart-buttons" class="mt-3">
            <?php echo controller()->renderPartial('@buttons'); ?>
        </div>
    </div>
</div>
