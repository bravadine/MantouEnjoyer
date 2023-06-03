<?php if($cart->count()): ?>
    <div class="cart-items">
        <ul>
            <?php $__currentLoopData = $cart->content()->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <button
                        type="button"
                        class="cart-btn btn btn-light btn-sm text-muted"
                        data-request="<?php echo e($removeCartItemEventHandler); ?>"
                        data-replace-loading="fa fa-spinner fa-spin"
                        data-request-data="rowId: '<?php echo e($cartItem->rowId); ?>', menuId: '<?php echo e($cartItem->id); ?>'"
                    ><i class="fa fa-minus"></i></button>

                    <span class="price pull-right">
                        <?php if($cartItem->hasConditions()): ?>
                            <s class="text-muted"><?php echo e(currency_format($cartItem->subtotalWithoutConditions())); ?></s>/
                        <?php endif; ?>
                        <?php echo e(currency_format($cartItem->subtotal)); ?>

                    </span>
                    <a
                        class="text-reset name-image"
                        data-cart-control="load-item"
                        data-row-id="<?php echo e($cartItem->rowId); ?>"
                        data-menu-id="<?php echo e($cartItem->id); ?>"
                    >
                        <span class="name">
                            <?php if($cartItem->qty > 1): ?>
                                <span class="quantity fw-bold">
                                    <?php echo e($cartItem->qty); ?> <?php echo app('translator')->get('igniter.cart::default.text_times'); ?>
                                </span>
                            <?php endif; ?>
                            <?php echo e($cartItem->name); ?>

                        </span>
                        <?php if($cartItem->hasOptions()): ?>
                            <?php echo controller()->renderPartial('@cart_item_options', ['itemOptions' => $cartItem->options]); ?>
                        <?php endif; ?>
                        <?php if(!empty($cartItem->comment)): ?>
                            <p class="comment text-muted small">
                                <?php echo e($cartItem->comment); ?>

                            </p>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php else: ?>
    <div class="panel-body text-center"><?php echo app('translator')->get('igniter.cart::default.text_no_cart_items'); ?></div>
<?php endif; ?>

