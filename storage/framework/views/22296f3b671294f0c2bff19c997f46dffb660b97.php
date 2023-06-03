<div class="sidebar" role="navigation">
    <div id="navSidebar" class="nav-sidebar">
        <?php echo $this->makePartial('side_nav_items', [
            'navItems' => $navItems,
            'navAttributes' => [
                'id' => 'side-nav-menu',
                'class' => 'nav',
            ],
        ]); ?>

    </div>
</div>
<?php /**PATH /var/www/html/app/admin/views/_partials/side_nav.blade.php ENDPATH**/ ?>