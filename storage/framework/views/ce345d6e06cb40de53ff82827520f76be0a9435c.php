<div class="container-fluid">
    <div class="login-container">
        <div class="card">
            <div class="card-body">
                <?php echo form_open([
                    'id' => 'edit-form',
                    'role' => 'form',
                    'method' => 'POST',
                    'data-request' => 'onLogin',
                ]); ?>


                <div class="form-group mb-0">
                    <label
                        for="input-username"
                        class="form-label"
                    ><?php echo app('translator')->get('admin::lang.login.label_username'); ?></label>
                    <input name="username" type="text" id="input-username" class="form-control"/>
                    <?php echo form_error('username', '<span class="text-danger">', '</span>'); ?>

                </div>
                <div class="form-group">
                    <label
                        for="input-password"
                        class="form-label"
                    ><?php echo app('translator')->get('admin::lang.login.label_password'); ?></label>
                    <input name="password" type="password" id="input-password" class="form-control"/>
                    <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>

                </div>
                <div class="form-group">
                    <button
                        type="submit"
                        class="btn btn-primary btn-block"
                        data-attach-loading=""
                    ><i class="fa fa-sign-in fa-fw"></i>&nbsp;&nbsp;&nbsp;<?php echo app('translator')->get('admin::lang.login.button_login'); ?>
                    </button>
                </div>

                <div class="form-group">
                    <p class="text-right">
                        <a href="<?php echo e(admin_url('login/reset')); ?>">
                            <?php echo app('translator')->get('admin::lang.login.text_forgot_password'); ?>
                        </a>
                    </p>
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/app/admin/views/auth/login.blade.php ENDPATH**/ ?>