<?php echo form_open($__SELF__->getFormAction(), [
    'id' => 'picker-form',
    'role' => 'form',
    'method' => 'GET',
]); ?>

<input type="hidden" name="picker_step" value="2">
<input type="hidden" name="location" value="<?php echo e(optional($__SELF__->location)->getKey()); ?>">

<div class="form-row align-items-center progress-indicator-container">
    <?php if($useCalendarView): ?>
        <div class="col-md-9 pr-md-4">
            <div
                data-control="datepicker"
                data-start-date="<?php echo e($__SELF__->getStartDate()->format('Y-m-d')); ?>"
                data-end-date="<?php echo e($__SELF__->getEndDate()->format('Y-m-d')); ?>"
                data-days-of-week-disabled='<?php echo json_encode($disabledDaysOfWeek ?? [], 15, 512) ?>'
                data-dates-disabled='<?php echo json_encode($disabledDates ?? [], 15, 512) ?>'
                data-week-start="<?php echo e($weekStartOn); ?>"
                data-format="yyyy-mm-dd"
                data-language=<?php echo e(setting('default_language')); ?>

            ></div>
            <input type="hidden" name="date" value="<?php echo e($__SELF__->getSelectedDate()->format('Y-m-d')); ?>"/>
        </div>
        <div class="col-md-3" id="ti-datepicker-options">
            <div class="form-group">
                <label for="noOfGuests"><?php echo app('translator')->get('igniter.reservation::default.label_guest_num'); ?></label>
                <?php echo controller()->renderPartial('@input_guest'); ?>
            </div>
            <div class="form-group">
                <label for="time"><?php echo app('translator')->get('igniter.reservation::default.label_time'); ?></label>
                <?php echo controller()->renderPartial('@input_time'); ?>
            </div>
            <?php if(count($timeOptions)): ?>
                <div class="form-group">
                    <button
                        type="submit"
                        class="btn btn-primary btn-block"
                    ><?php echo app('translator')->get('igniter.reservation::default.button_find_table'); ?></button>
                </div>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="col-sm-2 mb-3">
            <label
                class="sr-only"
                for="noOfGuests"
            ><?php echo app('translator')->get('igniter.reservation::default.label_guest_num'); ?></label>
            <?php echo controller()->renderPartial('@input_guest'); ?>
        </div>
        <div class="col-sm-3 mb-3">
            <label
                class="sr-only"
                for="date"
            ><?php echo app('translator')->get('igniter.reservation::default.label_date'); ?></label>
            <?php echo controller()->renderPartial('@input_date'); ?>
        </div>
        <div class="col-sm-2 mb-3">
            <label
                class="sr-only"
                for="time"
            ><?php echo app('translator')->get('igniter.reservation::default.label_time'); ?></label>
            <?php echo controller()->renderPartial('@input_time'); ?>
        </div>
        <div class="col-sm-2 mb-3">
            <button
                type="submit"
                class="btn btn-primary btn-block"
            ><?= lang('igniter.reservation::default.button_find_table'); ?></button>
        </div>
    <?php endif; ?>
</div>
<div class="form-row">
    <div class="col">
        <?php echo form_error('guest', '<span class="help-block text-danger">', '</span>'); ?>

        <?php echo form_error('date', '<span class="help-block text-danger">', '</span>'); ?>

        <?php echo form_error('time', '<span class="help-block text-danger">', '</span>'); ?>

    </div>
</div>

<?php echo form_close(); ?>


