<?php echo Assets::getJsVars(); ?>

<?php echo Assets::getJs(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php echo $this->theme->ga_tracking_code; ?>

<?php if(!empty($this->theme->custom_js)): ?>
    <script type="text/javascript"><?php echo $this->theme->custom_js; ?></script>
<?php endif; ?>
