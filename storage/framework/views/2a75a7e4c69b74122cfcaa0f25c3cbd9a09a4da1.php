<!DOCTYPE html>
<html lang="<?php echo e(App::getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo app('translator')->get('main::lang.not_found.page_label'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('app/admin/assets/images/favicon.ico')); ?>" type="image/ico">
    <link href="<?php echo e(asset('app/admin/assets/css/static.css')); ?>" rel="stylesheet">
</head>
<body>
    <article>
        <h1><?php echo app('translator')->get('main::lang.not_found.page_label'); ?></h1>
        <p class="lead"><?php echo app('translator')->get('main::lang.not_found.page_message'); ?></p>
    </article>
</body>
</html>
<?php /**PATH /var/www/html/app/main/views/404.blade.php ENDPATH**/ ?>