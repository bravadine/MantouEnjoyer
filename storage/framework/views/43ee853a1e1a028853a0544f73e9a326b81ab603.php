<div class="row-fluid">
    <?php echo $this->widgets['toolbar']->render(); ?>


    <?php echo $this->makePartial('updates/search', ['itemType' => 'language']); ?>


    <?php echo $this->widgets['list_filter']->render(); ?>


    <?php echo $this->widgets['list']->render(); ?>

</div>

<?php /**PATH /var/www/html/app/system/views/languages/index.blade.php ENDPATH**/ ?>