<?php
    $fieldOptions = $field->options();
    $checkedValues = (array)$field->value;
    $isScrollable = count($fieldOptions) > 10;
    $inlineMode = (bool)$field->getConfig('inlineMode');
?>
<?php if($this->previewMode && $field->value): ?>

    <div class="field-checkboxlist">
        <?php $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!in_array($value, $checkedValues)) continue; ?>
            <?php
                $checkboxId = 'checkbox_'.$field->getId().'_'.$loop->iteration;
                if (!is_array($option)) $option = [$option];
            ?>
            <div class="form-check<?php echo e($inlineMode ? ' form-check-inline' : ''); ?> mb-2">
                <input
                    type="checkbox"
                    id="<?php echo e($checkboxId); ?>"
                    class="form-check-input"
                    name="<?php echo e($field->getName()); ?>[]"
                    value="<?php echo e($value); ?>"
                    disabled="disabled"
                    checked="checked"
                >
                <label class="form-check-label" for="<?php echo e($checkboxId); ?>">
                    <?php echo e(is_lang_key($option[0]) ? lang($option[0]) : $option[0]); ?>

                    <?php if(isset($option[1])): ?>
                        <p class="help-block font-weight-normal"><?php echo e(is_lang_key($option[1]) ? lang($option[1]) : $option[1]); ?></p>
                    <?php endif; ?>
                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php elseif(!$this->previewMode && count($fieldOptions)): ?>

    <div class="field-checkboxlist <?php echo e($isScrollable ? 'is-scrollable' : ''); ?>">
        <?php if($isScrollable): ?>
            <small>
                <?php echo app('translator')->get('admin::lang.text_select'); ?>:
                <a href="javascript:;" data-field-checkboxlist-all><?php echo app('translator')->get('admin::lang.text_select_all'); ?></a>,
                <a href="javascript:;" data-field-checkboxlist-none><?php echo app('translator')->get('admin::lang.text_select_none'); ?></a>
            </small>

            <div class="field-checkboxlist-scrollable">
                <div class="scrollbar">
                    <?php endif; ?>

                    <input
                        type="hidden"
                        name="<?php echo e($field->getName()); ?>"
                        value="0" />

                    <?php $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $checkboxId = 'checkbox_'.$field->getId().'_'.$loop->iteration;
                            if (is_string($option)) $option = [$option];
                        ?>
                        <div class="form-check<?php echo e($inlineMode ? ' form-check-inline' : ''); ?> mb-2">
                            <input
                                type="checkbox"
                                id="<?php echo e($checkboxId); ?>"
                                class="form-check-input"
                                name="<?php echo e($field->getName()); ?>[]"
                                value="<?php echo e($value); ?>"
                                <?php echo in_array($value, $checkedValues) ? 'checked="checked"' : ''; ?>

                                <?php echo $field->getAttributes(); ?>>

                            <label class="form-check-label" for="<?php echo e($checkboxId); ?>">
                                <?php echo e(isset($option[0]) ? lang($option[0]) : '&nbsp;'); ?>

                                <?php if(isset($option[1])): ?>
                                    <p class="help-block font-weight-normal"><?php echo app('translator')->get($option[1]); ?></p>
                                <?php endif; ?>
                            </label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($isScrollable): ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

<?php else: ?>

    <?php if($field->placeholder): ?>
        <p><?php echo app('translator')->get($field->placeholder); ?></p>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/form/field_checkboxlist.blade.php ENDPATH**/ ?>