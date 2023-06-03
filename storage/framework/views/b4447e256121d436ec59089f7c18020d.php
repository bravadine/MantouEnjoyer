
<?php echo controller()->renderPartial('nav/local_tabs', ['activeTab' => 'menus']); ?>

<div class="panel">
    <div class="bg-white border-bottom px-3 d-block d-lg-none">
        <?php echo controller()->renderPartial('categories::mobile'); ?>
    </div>

    <?php echo controller()->renderComponent('localMenu'); ?>
</div>
