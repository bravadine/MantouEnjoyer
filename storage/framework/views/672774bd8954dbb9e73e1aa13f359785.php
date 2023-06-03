<?php if($location->checkNoOrderTypeAvailable()): ?>
    <label
        class="btn btn-light w-100 active"
    ><b><?php echo app('translator')->get('igniter.local::default.alert_order_type_required'); ?></b></label>
<?php else: ?>
    <?php if(count($locationOrderTypes) <= $__SELF__->property('maxOrderTypeButtons', 2)): ?>
        <div
            class="btn-group btn-group-toggle w-100 text-center"
            data-control="order-type-toggle"
            data-handler="<?php echo e($orderTypeEventHandler); ?>"
        >
            <?php $__currentLoopData = $locationOrderTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($orderType->isDisabled()) continue; ?>
                <input
                    id="btn-check-<?php echo e($orderType->getCode()); ?>"
                    type="radio"
                    name="order_type"
                    class="btn-check"
                    value="<?php echo e($orderType->getCode()); ?>"
                    <?php echo $orderType->isActive() ? 'checked="checked"' : ''; ?>

                />
                <label
                    for="btn-check-<?php echo e($orderType->getCode()); ?>"
                    class="btn btn-light w-50 <?php echo e($orderType->isActive() ? 'active' : ''); ?>"
                ><?php echo controller()->renderPartial('@control_info', ['orderType' => $orderType]); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <div
            class="dropdown"
            data-control="order-type-toggle"
            data-handler="<?php echo e($orderTypeEventHandler); ?>"
        >
            <button
                class="btn btn-light btn-block dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                <?php echo controller()->renderPartial('@control_info', ['orderType' => $location->getOrderType()]); ?>
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                <?php $__currentLoopData = $locationOrderTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($orderType->isDisabled()) continue; ?>
                    <a
                        role="button"
                        class="dropdown-item text-center <?php echo e($orderType->isActive() ? 'active' : ''); ?>"
                        data-order-type-code="<?php echo e($orderType->getCode()); ?>"
                    >
                        <?php echo controller()->renderPartial('@control_info', ['orderType' => $orderType]); ?>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if($minOrderTotal = $location->minimumOrderTotal()): ?>
        <p class="text-muted text-center my-2">
            <?php echo app('translator')->get('igniter.local::default.text_min_total'); ?>: <?php echo e(currency_format($minOrderTotal)); ?>

        </p>
    <?php endif; ?>
<?php endif; ?>

