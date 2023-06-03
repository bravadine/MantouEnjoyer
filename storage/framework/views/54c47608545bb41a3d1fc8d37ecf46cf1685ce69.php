<div class="dropdown-menu" role="menu">
    <h6 class="dropdown-header"><?php echo app('translator')->get('main::lang.media_manager.text_filter_by'); ?></h6>
    <div class="dropdown-divider"></div>
    <a
        role="button"
        class="dropdown-item <?php echo e(($filterBy == 'all') ? 'active' : ''); ?>"
        data-media-filter="all"
    ><i class="fa fa-hashtag fa-fw text-muted"></i>&nbsp;&nbsp;<?php echo app('translator')->get('main::lang.media_manager.label_filter_all'); ?></a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($filterBy == 'image') ? 'active' : ''); ?>"
        data-media-filter="image"
    ><i class="fa fa-image fa-fw text-muted"></i>&nbsp;&nbsp;<?php echo app('translator')->get('main::lang.media_manager.label_filter_image'); ?></a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($filterBy == 'video') ? 'active' : ''); ?>"
        data-media-filter="video"
    ><i class="fa fa-video fa-fw text-muted"></i>&nbsp;&nbsp;<?php echo app('translator')->get('main::lang.media_manager.label_filter_video'); ?></a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($filterBy == 'audio') ? 'active' : ''); ?>"
        data-media-filter="audio"
    ><i class="fa fa-file-audio fa-fw text-muted"></i>&nbsp;&nbsp;<?php echo app('translator')->get('main::lang.media_manager.label_filter_audio'); ?>
    </a>
    <a
        role="button"
        class="dropdown-item <?php echo e(($filterBy == 'document') ? 'active' : ''); ?>"
        data-media-filter="document"
    ><i class="fa fa-file fa-fw text-muted"></i>&nbsp;&nbsp;<?php echo app('translator')->get('main::lang.media_manager.label_filter_document'); ?></a>
</div>
<?php /**PATH /var/www/html/app/main/widgets/mediamanager/filters.blade.php ENDPATH**/ ?>