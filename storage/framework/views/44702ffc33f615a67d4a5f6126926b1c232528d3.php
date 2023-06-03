<div class="card m-3">
    <div class="card-body p-3 text-center">
        <button
            type="button"
            class="btn btn-light text-primary btn-lg"
            data-toggle="record-editor"
            data-handler="onLoadRecommended"
            data-record-data='{"itemType": "<?php echo e($itemType); ?>"}'
        ><?php echo app('translator')->get('system::lang.updates.button_recommended_'.$itemType); ?></button>
        <div
            id="carte-help"
            class="wrap-horizontal"
        ><?php echo sprintf(lang('system::lang.updates.help_carte_key'), 'https://tastyigniter.com/signin', 'https://tastyigniter.com/support/articles/carte-key'); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/system/views/updates/recommended.blade.php ENDPATH**/ ?>