<div class="menu-group">
    <?php $__empty_1 = true; $__currentLoopData = $groupedMenuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryId => $menuList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['menu-group-item']) ?>">
            <?php if($categoryId > 0): ?>
                <?php
                    $menuCategory = array_get($menuListCategories, $categoryId);
                    $menuCategoryAlias = strtolower(str_slug($menuCategory->name));
                ?>
                <div id="category-<?php echo e($menuCategoryAlias); ?>-heading" role="tab">
                    <h4
                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['category-title cursor-pointer', 'collapsed' => $loop->iteration >= $menuCollapseCategoriesAfter]) ?>"
                        data-bs-toggle="collapse"
                        data-bs-target="#category-<?php echo e($menuCategoryAlias); ?>-collapse"
                        aria-expanded="false"
                        aria-controls="category-<?php echo e($menuCategoryAlias); ?>-heading"
                    ><?php echo e($menuCategory->name); ?><i class="fa fa-chevron-down pull-right"></i></h4>
                </div>
                <div
                    id="category-<?php echo e($menuCategoryAlias); ?>-collapse"
                    class="collapse <?php echo e($loop->iteration < $menuCollapseCategoriesAfter ? 'show' : ''); ?>"
                    role="tabpanel" aria-labelledby="<?php echo e($menuCategoryAlias); ?>"
                >
                    <div class="menu-category">
                        <?php if(strlen($menuCategory->description)): ?>
                            <p><?php echo nl2br($menuCategory->description); ?></p>
                        <?php endif; ?>

                        <?php if($menuCategory->hasMedia('thumb')): ?>
                            <div class="image">
                                <img
                                    class="img-fluid"
                                    src="<?php echo e($menuCategory->getThumb(['width' => $menuCategoryWidth, 'height' => $menuCategoryHeight])); ?>"
                                    alt="<?php echo e($menuCategory->name); ?>"
                                />
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php echo controller()->renderPartial('@items', ['menuItems' => $menuList]); ?>
                </div>
            <?php else: ?>
                <?php echo controller()->renderPartial('@items', ['menuItems' => $menuList]); ?>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="menu-group-item">
            <p><?php echo app('translator')->get('igniter.local::default.text_no_category'); ?></p>
        </div>
    <?php endif; ?>
</div>

