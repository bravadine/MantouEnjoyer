<?php
    $activeTab = $activeTab ? $activeTab : '#'.$tabs->section.'tab-1';
?>
<div class="tab-heading">
    <ul class="form-nav nav nav-tabs">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $fields): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item">
                <a
                    class="nav-link<?php echo e((('#'.$tabs->section.'tab-'.$loop->iteration) == $activeTab) ? ' active' : ''); ?>"
                    href="<?php echo e('#'.$tabs->section.'tab-'.$loop->iteration); ?>"
                    data-bs-toggle="tab"
                ><?php echo app('translator')->get($name); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<div class="tab-content">
    <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $fields): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div
            class="tab-pane <?php echo e((('#'.$tabs->section.'tab-'.$loop->iteration) == $activeTab) ? 'active' : ''); ?>"
            id="<?php echo e($tabs->section.'tab-'.$loop->iteration); ?>"
        >
            <?php if($name === 'lang:admin::lang.locations.text_tab_options'): ?>
                <?php echo $this->makePartial('form/form_accordions', ['accordions' => $this->controller->getAccordionFields($fields)]); ?>

            <?php else: ?>
                <div class="form-fields">
                    <?php echo $this->makePartial('form/form_fields', ['fields' => $fields]); ?>

                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/app/admin/views/locations/form/form_tabs.blade.php ENDPATH**/ ?>