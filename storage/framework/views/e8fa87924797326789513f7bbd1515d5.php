<?php if(count($locationsList)): ?>
    <div class="local-group">
        <?php echo partial('@list', [
            'locationsList' => $locationsList,
            'distanceUnit' => $distanceUnit,
        ]); ?>

    </div>

    <div class="pagination-bar text-right">
        <div class="links"><?php echo $locationsList->links(); ?></div>
    </div>
<?php else: ?>
    <div class="panel panel-local">
        <div class="panel-body">
            <p><?php echo app('translator')->get('igniter.local::default.text_filter_no_match'); ?></p>
        </div>
    </div>
<?php endif; ?>

