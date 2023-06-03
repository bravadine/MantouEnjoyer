<?php $__currentLoopData = $scopes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scope): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col col-md-3 pr-md-3">
        <?php echo $this->renderScopeElement($scope); ?>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/app/admin/widgets/filter/filter_scopes.blade.php ENDPATH**/ ?>