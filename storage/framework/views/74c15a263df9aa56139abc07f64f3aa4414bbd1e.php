<li
    class="nav-item dropdown"
    data-control="location-picker"
>
    <a class="nav-link" href="" data-bs-toggle="dropdown">
        <i class="fa fa-location-dot" role="button"></i>
    </a>

    <ul class="dropdown-menu">
        <?php $__currentLoopData = $item->options(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dropdown-item', 'active' => $location->active]) ?>"
                    data-request="<?php echo e($this->getEventHandler('onChooseLocation')); ?>"
                    <?php if (! ($location->active)): ?>data-request-data="location: '<?php echo e($location->id); ?>'"<?php endif; ?>
                ><?php echo e($location->name); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</li>
<?php /**PATH /var/www/html/app/admin/views/locations/picker.blade.php ENDPATH**/ ?>