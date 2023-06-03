
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
            <div class="container py-4">
                <div id="heading" class="heading-section py-5">
                    <h2><?php echo e($this->page->title); ?></h2>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <?php echo controller()->renderPartial('nav/pages_menu'); ?>
                    </div>

                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <?php echo controller()->renderPage(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
