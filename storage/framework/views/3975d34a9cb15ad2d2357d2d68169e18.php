<?php echo form_open([
    'id' => 'contact-form',
    'role' => 'form',
    'method' => 'POST',
    'data-request' => $__SELF__.'::onSubmit',
]); ?>

<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <select
                name="subject"
                class="form-select"
            >
                <option><?php echo app('translator')->get('igniter.frontend::default.contact.text_select_subject'); ?></option>
                <?php $__currentLoopData = $__SELF__->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo app('translator')->get($subject); ?>"><?php echo app('translator')->get($subject); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php echo form_error('subject', '<span class="text-danger">', '</span>'); ?>

        </div>
        <div class="form-group">
            <input
                type="text"
                name="email"
                class="form-control"
                value="<?php echo e(set_value('email')); ?>"
                placeholder="<?php echo app('translator')->get('igniter.frontend::default.contact.label_email'); ?>"
            />
            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>

        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <input
                type="text"
                name="full_name"
                class="form-control"
                value="<?php echo e(set_value('full_name')); ?>"
                placeholder="<?php echo app('translator')->get('igniter.frontend::default.contact.label_full_name'); ?>"
            />
            <?php echo form_error('full_name', '<span class="text-danger">', '</span>'); ?>

        </div>
        <div class="form-group">
            <input
                type="text"
                name="telephone"
                class="form-control"
                value="<?php echo e(set_value('telephone')); ?>"
                placeholder="<?php echo app('translator')->get('igniter.frontend::default.contact.label_telephone'); ?>"
            />
            <?php echo form_error('telephone', '<span class="text-danger">', '</span>'); ?>

        </div>
    </div>
</div>
<div class="form-group">
    <textarea
        name="comment"
        class="form-control"
        rows="5"
        placeholder="<?php echo app('translator')->get('igniter.frontend::default.contact.label_comment'); ?>"
    ><?php echo e(set_value('comment')); ?></textarea>
    <?php echo form_error('comment', '<span class="text-danger">', '</span>'); ?>

</div>

<div class="buttons">
    <button
        type="submit"
        class="btn btn-primary btn-block"
    ><?php echo app('translator')->get('igniter.frontend::default.contact.button_send'); ?></button>
</div>
<?php echo form_close(); ?>


