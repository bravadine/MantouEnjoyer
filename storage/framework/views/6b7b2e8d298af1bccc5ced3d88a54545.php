<div
    data-control="booking"
>
    <?php if($__SELF__->pickerStep == 'info'): ?>
        <?php echo controller()->renderPartial('@info'); ?>

        <?php echo controller()->renderPartial('@booking_form'); ?>

    <?php elseif($__SELF__->pickerStep == 'timeslot'): ?>
        <h1 class="h3"><?php echo app('translator')->get('igniter.reservation::default.text_time_heading'); ?></h1>

        <?php echo controller()->renderPartial('@timeslot'); ?>
    <?php else: ?>
        <h1 class="h3"><?php echo app('translator')->get('igniter.reservation::default.text_heading'); ?></h1>

        <?php echo controller()->renderPartial('@picker_form'); ?>
    <?php endif; ?>
</div>

