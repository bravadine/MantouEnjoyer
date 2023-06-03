<?php if(!$hideSearch): ?>
    <div
        id="local-search-form"
        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['hide' => $localSearch->showAddressPicker()]) ?>"
    >
        <?php echo controller()->renderPartial('@form'); ?>
    </div>

    <?php if($__SELF__->showAddressPicker()): ?>
        <?php echo controller()->renderPartial('@address_picker'); ?>
    <?php endif; ?>

    <?php if($__SELF__->showDeliveryCoverageAlert()): ?>
        <p class="help-block text-center mt-1 mb-0"><?php echo app('translator')->get('igniter.local::default.text_delivery_coverage'); ?></p>
    <?php endif; ?>
<?php endif; ?>

