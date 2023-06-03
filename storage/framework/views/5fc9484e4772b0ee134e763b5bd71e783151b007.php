<div
    id="<?php echo e($this->getId()); ?>"
    class="mediafinder <?php echo e($mode); ?>-mode<?php echo e($isMulti ? ' is-multi' : ''); ?><?php echo e($value ? ' is-populated' : ''); ?>"
    data-control="mediafinder"
    data-alias="<?php echo e($this->alias); ?>"
    data-mode="<?php echo e($mode); ?>"
    data-choose-button-text="<?php echo e($chooseButtonText); ?>"
    data-use-attachment="<?php echo e($useAttachment); ?>"
>
    <?php echo $this->makePartial('mediafinder/image'); ?>


    <?php if($useAttachment): ?>
        <script type="text/template" data-config-modal-template>
            <div class="modal-dialog">
                <div id="<?php echo e($this->getId('config-modal-content')); ?>">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <div class="progress-indicator">
                                <span class="ti-loading spinner-border fa-3x fa-fw"></span>
                                <?php echo app('translator')->get('admin::lang.text_loading'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </script>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/app/admin/formwidgets/mediafinder/mediafinder.blade.php ENDPATH**/ ?>