
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo e(App::getLocale()); ?>" class="h-100">
<head>
    <?php echo controller()->renderPartial('head'); ?>
</head>
<body class="d-flex flex-column h-100 <?php echo e($this->page->bodyClass); ?>">

    <header class="header">
        <?php echo controller()->renderPartial('header'); ?>
    </header>

    <main role="main">
        <div id="page-wrapper">
            <?php echo controller()->renderPage(); ?>
        </div>
    </main>

    <footer class="footer mt-auto">
        <?php echo controller()->renderPartial('footer'); ?>
    </footer>
    <div id="notification">
        <?php echo controller()->renderPartial('flash'); ?>
    </div>
    <?php echo controller()->renderPartial('eucookiebanner'); ?>
    <?php echo controller()->renderPartial('scripts'); ?>
</body>
</html>
