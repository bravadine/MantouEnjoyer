<?php if($cart->count()): ?>
    <form
        id="coupon-form"
        method="POST"
        role="form"
        data-request="<?php echo e($applyCouponEventHandler); ?>"
    >
        <div class="cart-coupon">
            <div
                class="input-group">
                <input
                    type="text"
                    name="code"
                    class="form-control"
                    value="<?php echo e(($coupon = $cart->getCondition('coupon')) ? $coupon->getMetaData('code') : ''); ?>"
                    placeholder="<?php echo app('translator')->get('igniter.cart::default.text_apply_coupon'); ?>"/>

                <button
                    type="submit"
                    class="btn btn-light"
                    data-replace-loading="fa fa-spinner fa-spin"
                    title="<?php echo app('translator')->get('igniter.cart::default.button_apply_coupon'); ?>"
                ><i class="fa fa-check"></i></button>
            </div>
        </div>
    </form>
<?php endif; ?>

