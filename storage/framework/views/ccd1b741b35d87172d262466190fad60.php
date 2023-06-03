<strong><?php echo e($orderType->getLabel()); ?></strong>
<span class="small center-block">
    <?php if($orderType->getSchedule()->isOpen()): ?>
        <?php if($orderType->getLeadTime()): ?>
            <?php echo sprintf(lang('igniter.local::default.text_in_min'), $orderType->getLeadTime()); ?>

        <?php endif; ?>
    <?php elseif($orderType->getSchedule()->isOpening()): ?>
        <?php echo sprintf(lang('igniter.local::default.text_starts'), make_carbon($orderType->getSchedule()->getOpenTime())->isoFormat($openingTimeFormat)); ?>

    <?php elseif($orderType->getSchedule()->isClosed()): ?>
        <?php echo app('translator')->get('igniter.cart::default.text_is_closed'); ?>
    <?php endif; ?>
</span>

