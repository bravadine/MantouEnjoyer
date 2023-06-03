<div class="input-group flex-fill">
    <input
        type="text"
        name="<?php echo e($searchBox->getName()); ?>"
        class="form-control <?php echo e($cssClasses); ?>"
        value="<?php echo e($value); ?>"
        placeholder="<?php echo e($placeholder); ?>"
        autocomplete="off"
    />
    <button
        class="btn btn-light"
        type="submit"
        data-request="<?php echo e($searchBox->getEventHandler('onSubmit')); ?>"
    >
        <i class="fa fa-search"></i>
    </button>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/searchbox/searchbox.blade.php ENDPATH**/ ?>