<?php
    $openingTime = make_carbon($locationCurrentSchedule->getOpenTime());
?>
<dl class="no-spacing">
    <?php if($locationCurrentSchedule->isOpen()): ?>
        <dt><?php echo app('translator')->get('igniter.local::default.text_is_opened'); ?></dt>
    <?php elseif($locationCurrentSchedule->isOpening()): ?>
        <dt class="text-muted"><?php echo sprintf(lang('igniter.local::default.text_opening_time'), $openingTime->isoFormat($openingTimeFormat)); ?></dt>
    <?php else: ?>
        <dt class="text-muted"><?php echo app('translator')->get('igniter.local::default.text_closed'); ?></dt>
    <?php endif; ?>

    <dd>
        <?php if($openingTime->isToday() && $locationCurrentSchedule->getPeriod($openingTime)->opensAllDay()): ?>
            <span class="fa fa-clock"></span>&nbsp;&nbsp;
            <span><?php echo app('translator')->get('igniter.local::default.text_24_7_hour'); ?></span>
        <?php elseif($openingHours = $__SELF__->getOpeningHours($localBoxTimeFormat)): ?>
            <span class="fa fa-clock-o"></span>&nbsp;
            <?php echo implode(', ', $openingHours); ?>

        <?php endif; ?>
    </dd>

    <dd class="text-muted">
        <?php if(!$locationCurrent->hasDelivery() && $locationCurrent->hasCollection()): ?>
            <?php echo app('translator')->get('igniter.local::default.text_collection_only'); ?>
        <?php elseif($locationCurrent->hasDelivery() && !$locationCurrent->hasCollection()): ?>
            <?php echo app('translator')->get('igniter.local::default.text_delivery_only'); ?>
        <?php elseif($locationCurrent->hasDelivery() && $locationCurrent->hasCollection()): ?>
            <?php echo app('translator')->get('igniter.local::default.text_both_types'); ?>
        <?php else: ?>
            <?php echo app('translator')->get('igniter.local::default.text_no_types'); ?>
        <?php endif; ?>
    </dd>
    <dd class="text-muted">
        <?php echo implode(', ', $__SELF__->getAreaConditionLabels()); ?>

    </dd>
</dl>

