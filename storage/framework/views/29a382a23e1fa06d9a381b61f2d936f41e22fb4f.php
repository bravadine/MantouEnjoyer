<?php if (! ($field->hidden)): ?>
    <?php if (! ($this->showFieldLabels($field))): ?>
        <?php echo $this->renderFieldElement($field); ?>

    <?php else: ?>
        <?php if($field->label): ?>
            <label for="<?php echo e($field->getId()); ?>" class="form-label"><?php echo app('translator')->get($field->label); ?></label>
        <?php endif; ?>

        <?php if($field->comment && $field->commentPosition == 'above'): ?>
            <p class="help-block before-field">
                <?php if($field->commentHtml): ?> <?php echo lang($field->comment); ?> <?php else: ?> <?php echo app('translator')->get($field->comment); ?> <?php endif; ?>
            </p>
        <?php endif; ?>

        <?php echo $this->renderFieldElement($field); ?>


        <?php if($field->comment && $field->commentPosition == 'below'): ?>
            <p class="help-block">
                <?php if($field->commentHtml): ?> <?php echo lang($field->comment); ?> <?php else: ?> <?php echo app('translator')->get($field->comment); ?> <?php endif; ?>
            </p>
        <?php endif; ?>

    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/form/field.blade.php ENDPATH**/ ?>