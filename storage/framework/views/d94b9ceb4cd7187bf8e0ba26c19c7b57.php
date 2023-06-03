<ul class="nav flex-column nav-categories">
    <li class="nav-item">
        <a
            class="nav-link fw-bold<?php echo e($selectedCategory ? '' : ' active'); ?>"
            href="<?php echo e(page_url('local/menus', ['category' => null])); ?>"
        ><?php echo app('translator')->get('igniter.local::default.text_all_categories'); ?></a>
    </li>

    <?php echo controller()->renderPartial('@items', ['categories' => $categories->toTree()]); ?>
</ul>

