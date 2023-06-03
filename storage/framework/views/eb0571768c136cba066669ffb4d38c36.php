<div class="layout-scrollable w-100">
    <ul class="nav nav-categories nav-inline flex-nowrap py-2 w-100">
        <li class="nav-item">
            <a
                class="nav-link text-nowrap fw-bold<?php echo e($selectedCategory ? '' : ' active'); ?>"
                href="<?php echo e(page_url('local/menus', ['category' => null])); ?>"
            ><?php echo app('translator')->get('igniter.local::default.text_all_categories'); ?></a>
        </li>

        <?php echo controller()->renderPartial('@items', ['categories' => $categories->toFlatTree(), 'displayAsFlatTree' => true]); ?>
    </ul>
</div>

