<?php
    $fieldOptions = $field->value;
?>
<div class="field-flexible-hours">
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
            <tr>
                <th></th>
                <th><?php echo app('translator')->get('admin::lang.locations.label_schedule_hours'); ?></th>
                <th class="text-right"><?php echo app('translator')->get('admin::lang.label_status'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $formModel->getWeekDaysOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $hour = $fieldOptions[$key] ?? ['day' => $key, 'open' => '00:00', 'close' => '23:59', 'status' => 1]
                ?>
                <tr>
                    <td>
                        <span><?php echo e($day); ?></span>
                        <input
                            type="hidden"
                            name="<?php echo e($field->getName().'['.$loop->index.'][day]'); ?>"
                            value="<?php echo e($hour['day']); ?>"
                        />
                    </td>
                    <td>
                        <div class="input-group" data-control="input-mask" data-autoclose="true">
                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            <input
                                type="text"
                                name="<?php echo e($field->getName().'['.$loop->index.'][hours]'); ?>"
                                class="form-control"
                                data-control="inputmask"
                                data-inputmask-regex="(([01][0-9]|2[0-3]):([0-5][0-9])\-([01][0-9]|2[0-3]):([0-5][0-9])((,)( )?))*$"
                                placeholder=""
                                value="<?php echo e($hour['hours']); ?>"
                                autocomplete="off"
                            />
                        </div>
                    </td>
                    <td class="text-right">
                        <input
                            type="hidden"
                            name="<?php echo e($field->getName().'['.$loop->index.'][status]'); ?>"
                            value="0"
                            <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                        >
                        <div class="form-check form-switch">
                            <input
                                type="checkbox"
                                name="<?php echo e($field->getName().'['.$loop->index.'][status]'); ?>"
                                id="<?php echo e($field->getId($loop->index.'status')); ?>"
                                class="form-check-input"
                                value="1"
                                <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                                <?php echo $hour['status'] == 1 ? 'checked="checked"' : ''; ?>

                                <?php echo $field->getAttributes(); ?>

                            />
                            <label
                                class="form-check-label"
                                for="<?php echo e($field->getId($loop->index.'status')); ?>"
                            ></label>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/views/locations/form/flexible_hours.blade.php ENDPATH**/ ?>