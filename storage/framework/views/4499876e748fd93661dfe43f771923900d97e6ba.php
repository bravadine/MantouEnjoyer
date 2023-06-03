<div class="row-fluid">
    <?php echo form_open(current_url(),
        [
            'id'     => 'list-form',
            'role'   => 'form',
            'method' => 'POST',
        ]
    ); ?>


    <div class="container-fluid">
        <?php echo $this->makePartial('lists/list_body'); ?>

    </div>

    <?php echo form_close(); ?>


    <?php echo $this->makePartial('lists/list_pagination'); ?>


    <?php echo $this->makePartial('updates/recommended', ['itemType' => 'theme']); ?>

</div>
<?php /**PATH /var/www/html/app/system/views/themes/lists/list.blade.php ENDPATH**/ ?>