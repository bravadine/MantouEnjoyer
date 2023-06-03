<?php if($tabs->suppressTabs): ?>

    <div
        id="<?php echo e($this->getId($tabs->section.'-tabs')); ?>"
        class="<?php echo e($tabs->cssClass); ?>">
        <div class="form-fields">
            <?php echo $this->makePartial('form/form_fields', ['fields' => $tabs]); ?>

        </div>
    </div>

<?php else: ?>

    <div
        id="<?php echo e($this->getId($tabs->section.'-tabs')); ?>"
        class="<?php echo e($tabs->section); ?>-tabs <?php echo e($tabs->cssClass); ?>"
        data-control="form-tabs"
        data-store-name="<?php echo e($cookieKey); ?>">
        <?php echo $this->makePartial('form/form_tabs', ['tabs' => $tabs]); ?>

    </div>

<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/form/form_section.blade.php ENDPATH**/ ?>