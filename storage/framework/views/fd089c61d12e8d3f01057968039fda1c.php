<?php $locationIsClosed = ($__SELF__->locationIsClosed() || $__SELF__->hasMinimumOrder()); ?>
<button
    class="checkout-btn btn btn-primary <?php echo e($locationIsClosed ? 'disabled' : ''); ?> btn-block btn-lg"
    data-attach-loading="disabled"
    <?php if($pageIsCheckout && !$locationIsClosed): ?>
    data-checkout-control="confirm-checkout"
    data-request-form="#checkout-form"
    <?php elseif(!$locationIsClosed): ?>
    data-request="<?php echo e($checkoutEventHandler); ?>"
    data-request-data="locationId: '<?php echo e($__SELF__->getLocationId()); ?>'"
    <?php endif; ?>
><?php echo e($__SELF__->buttonLabel($checkout ?? null)); ?></button>

