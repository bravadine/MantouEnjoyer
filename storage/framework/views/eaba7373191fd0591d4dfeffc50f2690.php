<div id="local-box">
    <?php if($location->orderTypeIsDelivery()): ?>
        <?php if(($alias = $__SELF__->property('localSearchAlias')) && has_component($alias)): ?>
            <div class="panel local-search">
                <div class="panel-body">
                    <div id="local-search-container">
                        <?php echo controller()->renderPartial($alias.'::container'); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php echo controller()->renderPartial($__SELF__.'::default'); ?>

    <div class="card mt-1 d-block d-lg-none">
        <div class="card-body">
            <div class="local-timeslot mb-3">
                <?php echo controller()->renderPartial('@timeslot'); ?>
            </div>
            <div class="local-control">
                <?php echo controller()->renderPartial('@control'); ?>
            </div>
        </div>
    </div>
</div>

