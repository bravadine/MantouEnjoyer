<div class="<?php echo e($pageIsCart ?: 'affix-cart d-none d-lg-block'); ?>">
    <div class="panel panel-cart">
        <div class="panel-body">
            <?php if(has_component($__SELF__->property('localBoxAlias'))): ?>
                <div class="local-timeslot">
                    <?php echo controller()->renderPartial($__SELF__->property('localBoxAlias').'::timeslot'); ?>
                </div>
                <div class="local-control mt-3">
                    <?php echo controller()->renderPartial($__SELF__->property('localBoxAlias').'::control'); ?>
                </div>
            <?php endif; ?>

            <?php echo controller()->renderPartial($__SELF__.'::default'); ?>
        </div>
    </div>
</div>
<?php echo controller()->renderPartial($__SELF__.'::mobile'); ?>

