<div class="dashboard-widget widget-charts">
    <h6 class="widget-title"><?php echo app('translator')->get($this->property('title')); ?></h6>
    <div
        class="chart-container"
        data-control="chart"
        data-alias="<?php echo e($this->alias); ?>"
        data-range-selector="#<?php echo e($this->alias); ?>-daterange"
        data-range-parent-selector="#<?php echo e($this->alias); ?>-daterange-parent"
        data-range-format="<?php echo e($this->property('rangeFormat')); ?>"
    >
        <div
            id="<?php echo e($this->alias); ?>-daterange-parent"
            class="chart-toolbar d-flex justify-content-end pb-3"
        >
            <button
                id="<?php echo e($this->alias); ?>-daterange"
                class="btn btn-light btn-sm"
                data-control="daterange"
            >
                <i class="fa fa-calendar"></i>&nbsp;&nbsp;
                <span><?php echo app('translator')->get('admin::lang.dashboard.text_select_range'); ?></span>&nbsp;&nbsp;
                <i class="fa fa-caret-down"></i>
            </button>
        </div>
        <div class="chart-canvas">
            <canvas
                id="<?php echo e($this->alias); ?>"
            ></canvas>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/dashboardwidgets/charts/charts.blade.php ENDPATH**/ ?>