<ul class="nav navbar-nav">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::isLogged() && in_array($navItem->code, ['login', 'register'])) continue; ?>
        <?php if(!Auth::isLogged() && in_array($navItem->code, ['account', 'recent-orders'])) continue; ?>
        <li
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-item', 'dropdown' => $navItem->items]) ?>"
        >
            <a
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'dropdown-toggle' => $navItem->items, 'active text-primary' => $navItem->isActive || $navItem->isChildActive]) ?>"
                href="<?php echo e($navItem->items ? '#' : $navItem->url); ?>"
                <?php if($navItem->items): ?> data-bs-toggle="dropdown" <?php endif; ?>
                <?php echo $navItem->extraAttributes; ?>

            ><?php echo app('translator')->get($navItem->title); ?> <?php if($navItem->items): ?> <span class="caret"></span> <?php endif; ?></a>
            <?php if($navItem->items): ?>
                <div
                    class="dropdown-menu px-3"
                    aria-labelledby="navbar-<?php echo e($navItem->code); ?>"
                    role="menu"
                >
                    <?php $__currentLoopData = $navItem->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dropdown-item py-2 rounded', 'active' => $item->isActive, 'border-bottom' => !$loop->last]) ?>"
                            href="<?php echo e($item->url); ?>"
                            <?php echo $item->extraAttributes; ?>

                        ><?php echo app('translator')->get($item->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
