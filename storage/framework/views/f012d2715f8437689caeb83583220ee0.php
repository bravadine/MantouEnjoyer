<?php if($cart->count()): ?>
    <div class="cart-total">
        <div class="table-responsive">
            <table class="table table-none">
                <tbody>

                <tr>
                    <td>
                    <span class="text-muted">
                        <?php echo app('translator')->get('igniter.cart::default.text_sub_total'); ?>:
                   </span>
                    </td>
                    <td class="text-right">
                        <?php echo e(currency_format($cart->subtotal())); ?>

                    </td>
                </tr>

                <?php $__currentLoopData = $cart->conditions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $condition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                        <span class="text-muted">
                            <?php echo e($condition->getLabel()); ?>:
                            <?php if($condition->removeable): ?>
                                <button
                                    type="button"
                                    class="btn btn-sm"
                                    data-request="<?php echo e($removeConditionEventHandler); ?>"
                                    data-request-data="conditionId: '<?php echo e($id); ?>'"
                                    data-replace-loading="fa fa-spinner fa-spin"
                                ><i class="fa fa-times"></i></button>
                            <?php endif; ?>
                       </span>
                        </td>
                        <td class="text-right">
                            <?php echo e(is_numeric($result = $condition->getValue()) ? currency_format($result) : $result); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td>
                    <span class="text-muted">
                        <?php echo app('translator')->get('igniter.cart::default.text_order_total'); ?>:
                   </span>
                    </td>
                    <td class="text-right">
                        <?php echo e(currency_format($cart->total())); ?>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>

