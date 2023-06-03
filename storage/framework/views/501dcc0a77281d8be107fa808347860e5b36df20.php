<tr
    id="<?php echo e($this->getId('item-'.$indexValue)); ?>"
    class="repeater-item" data-item-index="<?php echo e($indexValue); ?>">
    <?php if(!$this->previewMode && $sortable): ?>
        <td class="repeater-item-handle">
            <input type="hidden" name="<?php echo e($sortableInputName); ?>[]" value="<?php echo e($indexValue); ?>">
            <div class="btn <?php echo e($this->getId('items')); ?>-handle">
                <i class="fa fa-arrows-alt-v"></i>
            </div>
        </td>
    <?php endif; ?>

    <?php if(!$this->previewMode && $showRemoveButton): ?>
        <td class="list-action repeater-item-remove">
            <a
                class="btn btn-outline-danger border-none"
                role="button"
                data-control="remove-item"
                data-target="#<?php echo e($this->getId('item-'.$indexValue)); ?>"
                data-prompt="<?php echo app('translator')->get('admin::lang.alert_confirm'); ?>"
            ><i class="fa fa-trash-alt"></i></a>
        </td>
    <?php endif; ?>

    <?php $__currentLoopData = $widget->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $fieldError = form_error($field->getName());
        ?>

        <?php if($field->type == 'hidden'): ?>
            <?php echo $widget->renderFieldElement($field); ?>

        <?php else: ?>
            <td>
                <?php echo $widget->renderFieldElement($field); ?>

            </td>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tr>
<?php /**PATH /var/www/html/app/admin/formwidgets/repeater/repeater_item.blade.php ENDPATH**/ ?>