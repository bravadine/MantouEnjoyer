<div
    class="media-manager"
    data-control="media-manager"
    data-alias="<?php echo e($this->alias); ?>"
    data-max-upload-size="<?php echo e($maxUploadSize); ?>"
    data-allowed-extensions='<?php echo json_encode($allowedExtensions, 15, 512) ?>'
    data-select-mode="<?php echo e($selectMode); ?>"
    data-unique-id="<?php echo e($this->getId()); ?>"
>
    <div id="<?php echo e($this->getId('toolbar')); ?>" class="media-toolbar">
        <?php echo $this->makePartial('mediamanager/toolbar'); ?>

    </div>

    <div id="notification"></div>

    <div class="media-container">
        <div class="row no-gutters">
            <div
                class="col-9 border-right wrap-none wrap-left"
                data-control="media-list"
            >
                <div id="<?php echo e($this->getId('breadcrumb')); ?>" class="media-breadcrumb border-bottom">
                    <?php echo $this->makePartial('mediamanager/breadcrumb'); ?>

                </div>

                <div id="<?php echo e($this->getId('item-list')); ?>" class="media-list-container">
                    <?php if($this->getSetting('uploads')): ?>
                        <?php echo $this->makePartial('mediamanager/uploader'); ?>

                    <?php endif; ?>

                    <?php echo $this->makePartial('mediamanager/item_list'); ?>

                </div>
            </div>
            <div class="col-3">
                <?php echo $this->makePartial('mediamanager/sidebar'); ?>

            </div>
        </div>
    </div>

    <div
        id="<?php echo e($this->getId('statusbar')); ?>"
        data-control="media-statusbar">
        <?php echo $this->makePartial('mediamanager/statusbar'); ?>

    </div>
    <?php echo $this->makePartial('mediamanager/forms'); ?>

</div>

<div id="previewBox" style="display:none;"></div>
<?php /**PATH /var/www/html/app/main/widgets/mediamanager/mediamanager.blade.php ENDPATH**/ ?>