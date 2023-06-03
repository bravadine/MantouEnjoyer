<div
    id="<?php echo e($filterId); ?>"
    class="list-filter <?php echo e($cssClasses); ?>"
    data-store-name="<?php echo e($cookieStoreName); ?>"
    <?php echo !$this->isActiveState() ? ' style="display:none"' : ''; ?>

>
    <form
        id="filter-form"
        class="form-inline"
        accept-charset="utf-8"
        method="POST"
        action="<?php echo e(current_url()); ?>"
        role="form"
    >
        <?php echo csrf_field(); ?>
        <div class="d-sm-flex flex-sm-wrap w-100 no-gutters">
            <?php if($search): ?>
                <div class="col col-sm-6 pb-sm-3 pr-sm-3">
                    <div class="d-flex no-gutters">
                        <div class="pr-3">
                            <button
                                class="btn btn-outline-danger"
                                type="button"
                                data-request="<?php echo e($onClearHandler); ?>"
                                data-attach-loading
                            ><i class="fa fa-times"></i></button>
                        </div>
                        <div class="flex-grow-1">
                            <div class="filter-search"><?php echo $search; ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(count($scopes)): ?>
                <input type="hidden" name="_handler" value="<?php echo e($onSubmitHandler); ?>">

                <?php echo $this->makePartial('filter/filter_scopes'); ?>

            <?php endif; ?>
        </div>
    </form>
</div>
<?php /**PATH /var/www/html/app/admin/widgets/filter/filter.blade.php ENDPATH**/ ?>