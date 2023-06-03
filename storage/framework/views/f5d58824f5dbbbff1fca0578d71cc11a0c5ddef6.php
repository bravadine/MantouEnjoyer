<div
    class="col col-sm-<?php echo e($widget->property('width')); ?> my-3"
>
    <div class="widget-item card <?php echo e($widget->property('cssClass', 'bg-light')); ?> p-3 shadow-sm">
        <div class="widget-item-action">
            <a class="btn handle pull-left"><i class="fa fa-arrows-alt"></i></a>
            <?php if($this->canManage): ?>
                <a
                    class="btn pull-right"
                    data-control="remove-widget"
                    aria-hidden="true"
                ><i class="fa fa-trash-alt text-danger"></i></a>
            <?php endif; ?>
            <a
                class="btn pull-right"
                data-control="edit-widget"
                data-bs-toggle="modal"
                data-bs-target="#<?php echo e($widgetAlias); ?>-modal"
                data-handler="<?php echo e($this->getEventHandler('onLoadUpdatePopup')); ?>"
            ><i class="fa fa-cog"></i></a>
        </div>

        <div id="<?php echo e($widgetAlias); ?>"><?php echo $widget->render(); ?></div>

        <input type="hidden" data-widget-alias name="widgetAliases[]" value="<?php echo e($widgetAlias); ?>"/>
        <input type="hidden" data-widget-priority name="widgetPriorities[]" value="<?php echo e($priority); ?>"/>
    </div>

    <div
        class="modal slideInDown fade"
        id="<?php echo e($widgetAlias); ?>-modal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="<?php echo e($widgetAlias); ?>-title"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div
                id="<?php echo e($widgetAlias); ?>-modal-content"
                class="modal-content"
            >
                <?php echo $this->makePartial('dashboardcontainer/widget_form', [
                    'widgetAlias' => $widgetAlias,
                    'widget' => $widget,
                    'widgetForm' => $this->getFormWidget($widgetAlias, $widget),
                ]); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/dashboardcontainer/widget_item.blade.php ENDPATH**/ ?>