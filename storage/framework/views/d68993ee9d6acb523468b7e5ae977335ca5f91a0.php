<div class="row-fluid">
    <?php echo form_open(current_url(),
        [
            'id' => 'edit-form',
            'role' => 'form',
            'method' => 'PATCH',
        ]
    ); ?>


    <?php echo $this->toolbarWidget->render(); ?>

    <?php echo $this->formWidget->render(); ?>


    <?php echo form_close(); ?>

</div>
<?php /**PATH /var/www/html/app/system/views/extensions/edit.blade.php ENDPATH**/ ?>