<?php echo form_open([
    'id' => 'list-form',
    'role' => 'form',
    'method' => 'POST',
]); ?>


<div
    id="<?php echo e($this->getId()); ?>"
    class="list-table table-responsive"
>
    <table
        id="<?php echo e($this->getId('table')); ?>"
        class="table table-hover mb-0 border-bottom"
    >
        <thead>
        <?php if($showCheckboxes): ?>
            <?php echo $this->makePartial('lists/list_actions'); ?>

        <?php endif; ?>
        <?php echo $this->makePartial('lists/list_head'); ?>

        </thead>
        <tbody>
        <?php if(count($records)): ?>
            <?php echo $this->makePartial('lists/list_body'); ?>

        <?php else: ?>
            <tr>
                <td colspan="99" class="text-center"><?php echo e($emptyMessage); ?></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php echo form_close(); ?>


<?php echo $this->makePartial('lists/list_pagination'); ?>


<?php if($showSetup): ?>
    <?php echo $this->makePartial('lists/list_setup'); ?>

<?php endif; ?>
<?php /**PATH /var/www/html/app/admin/widgets/lists/list.blade.php ENDPATH**/ ?>