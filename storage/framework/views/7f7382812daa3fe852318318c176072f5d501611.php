<div
    class="modal slideInDown fade"
    id="newWidgetModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="newWidgetModalTitle"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div id="<?php echo e($this->getId('new-widget-modal-content')); ?>" class="modal-content">
            <div class="modal-body">
                <div class="progress-indicator">
                    <span class="spinner"><span class="ti-loading fa-3x fa-fw"></span></span>
                    <?php echo app('translator')->get('admin::lang.text_loading'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if($this->canManage || $this->canSetDefault): ?>
    <div class="toolbar-action pt-3">
        <?php if($this->canManage): ?>
            <button
                type="button"
                class="btn btn-outline-primary"
                data-bs-toggle="modal"
                data-bs-target="#newWidgetModal"
                data-request="<?php echo e($this->getEventHandler('onLoadAddPopup')); ?>"
                tabindex="-1"
            ><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo app('translator')->get('admin::lang.dashboard.button_add_widget'); ?></button>
            <button
                type="button"
                class="btn btn-outline-danger"
                data-request="<?php echo e($this->getEventHandler('onResetWidgets')); ?>"
                data-request-confirm="<?php echo app('translator')->get('admin::lang.alert_warning_confirm'); ?>"
                data-attach-loading
                title="<?php echo app('translator')->get('admin::lang.dashboard.button_reset_widgets'); ?>"
                tabindex="-1"
            ><i class="fa fa-refresh"></i></button>
        <?php endif; ?>
        <?php if($this->canSetDefault): ?>
            <button
                type="button"
                class="btn btn-outline-default pull-right"
                data-request="<?php echo e($this->getEventHandler('onSetAsDefault')); ?>"
                data-request-confirm="<?php echo app('translator')->get('admin::lang.dashboard.alert_set_default_confirm'); ?>"
                data-attach-loading
                tabindex="-1"
            ><i class="fa fa-save"></i>&nbsp;&nbsp;<?php echo app('translator')->get('admin::lang.dashboard.button_set_default'); ?></button>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/dashboardcontainer/widget_toolbar.blade.php ENDPATH**/ ?>