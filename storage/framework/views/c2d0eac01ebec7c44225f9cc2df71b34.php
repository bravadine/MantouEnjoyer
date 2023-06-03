<?php if(!$hideMenuSearch): ?>
    <div class="menu-search">
        <?php echo controller()->renderPartial('@searchbar'); ?>
    </div>
<?php endif; ?>

<div class="menu-list">
    <?php if($menuIsGrouped): ?>
        <?php echo controller()->renderPartial('@grouped', ['groupedMenuItems' => $menuList]); ?>
    <?php else: ?>
        <?php echo controller()->renderPartial('@items', ['menuItems' => $menuList]); ?>
    <?php endif; ?>

    <div class="pagination-bar text-right">
        <div class="links"><?php echo $menuList->links(); ?></div>
    </div>
</div>

