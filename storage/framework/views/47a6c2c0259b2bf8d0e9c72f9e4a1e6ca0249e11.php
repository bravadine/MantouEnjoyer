<?php
    $sortName = isset($sortBy[0]) ? $sortBy[0] : null;
    $sortDirection = isset($sortBy[1]) ? $sortBy[1] : 'ascending';
    $sortIcon = ($sortDirection === 'ascending') ? '-up' : '-down';
?>
<div class="dropdown-menu" role="menu">
    <h6 class="dropdown-header"><?php echo app('translator')->get('main::lang.media_manager.text_sort_by'); ?></h6>
    <div class="dropdown-divider"></div>
    <a
        role="button"
        class="dropdown-item <?php echo e(($sortName == 'name') ? 'active' : ''); ?>"
        data-media-sort="name"
    ><?php echo app('translator')->get('main::lang.media_manager.label_name'); ?></a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($sortName == 'date') ? 'active' : ''); ?>"
        data-media-sort="date"
    ><?php echo app('translator')->get('main::lang.media_manager.label_date'); ?></a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($sortName == 'size') ? 'active' : ''); ?>"
        data-media-sort="size"
    ><?php echo app('translator')->get('main::lang.media_manager.label_size'); ?></a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($sortName == 'extension') ? 'active' : ''); ?>"
        data-media-sort="extension"
    ><?php echo app('translator')->get('main::lang.media_manager.label_type'); ?></a>
</div>
<?php /**PATH /var/www/html/app/main/widgets/mediamanager/sorting.blade.php ENDPATH**/ ?>