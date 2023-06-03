<div class="row-fluid">

    <?php echo $this->widgets['toolbar']->render(); ?>


    <?php if(!empty($updates['items']) || !empty($updates['ignoredItems'])): ?>
        <div id="updates">
            <?php echo $this->makePartial('updates/list'); ?>

        </div>
    <?php else: ?>
        <div class="panel panel-light">
            <div class="panel-body" id="list-items">
                <h5 class="text-w-400 mb-0"><?php echo app('translator')->get('system::lang.updates.text_no_updates'); ?></h5>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php echo $this->makePartial('updates/carte'); ?>

<?php /**PATH /var/www/html/app/system/views/updates/index.blade.php ENDPATH**/ ?>