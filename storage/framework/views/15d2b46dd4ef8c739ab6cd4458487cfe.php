<div
    id="cart-mobile-buttons"
    class="<?php echo e(!$pageIsCheckout ? 'fixed-bottom' : 'mt-3'); ?><?php echo e($pageIsCart ? 'hide' : ' d-block d-lg-none'); ?>"
>
    <?php if($pageIsCheckout): ?>
        <?php echo controller()->renderPartial('@buttons'); ?>
    <?php elseif(!$pageIsCart): ?>
        <a
            class="btn btn-primary btn-block btn-lg radius-none cart-toggle text-nowrap"
            href="<?php echo e(site_url('cart')); ?>"
        >
            <?php echo app('translator')->get('igniter.cart::default.text_heading'); ?>:
            <span data-cart-total class="fw-bold"><?php echo e(currency_format($cart->total())); ?></span>
        </a>
    <?php endif; ?>
</div>

