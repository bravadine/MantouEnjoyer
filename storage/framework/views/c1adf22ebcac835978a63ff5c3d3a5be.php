<?php echo get_metas(); ?>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php if(trim($favicon = $this->theme->favicon, '/')): ?>
    <link href="<?php echo e(uploads_url($favicon)); ?>" rel="shortcut icon" type="image/ico">
<?php else: ?>
    <?php echo get_favicon(); ?>

<?php endif; ?>
<title><?php echo e(sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name'))); ?></title>
<?php if($this->page->description): ?><meta name="description" content="<?php echo e($this->page->description); ?>"><?php endif; ?>
<?php if($this->page->keywords): ?><meta name="keywords" content="<?php echo e($this->page->keywords); ?>"><?php endif; ?>
<link href="//fonts.googleapis.com/css?family=Amaranth|Titillium+Web:200,200i,400,400i,600,600i,700,700i|Droid+Sans+Mono" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<?php echo Assets::getCss(); ?>
<?php echo $__env->yieldPushContent('styles'); ?>
<?php if(!empty($this->theme->custom_css)): ?>
    <style type="text/css" id="custom-css"><?php echo $this->theme->custom_css; ?></style>
<?php endif; ?>
