<?php if($showLocalThumb && $locationCurrent->hasMedia('thumb')): ?>
    <img
        class="img-fluid pull-left"
        src="<?php echo e($locationCurrent->getThumb(['width' => $localThumbWidth, 'height' => $localThumbHeight])); ?>"
    />
<?php endif; ?>
<dl class="no-spacing">
    <dd><h1 class="h3"><?php echo e($locationCurrent->getName()); ?></h1></dd>
    <?php if($showReviews): ?>
        <dd class="text-muted">
            <div class="rating rating-sm">
                <?php $reviewScore = $locationCurrent->reviews_score() ?> <?php for($value = 1; $value<6; $value++): ?>
                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['fa-star', 'fa' => $value <= $reviewScore, 'far' => $value > $reviewScore]) ?>"></span>
                <?php endfor; ?>
                <span class="small">(<?php echo e($locationCurrent->reviews_count ?? 0); ?>)</span>
            </div>
        </dd>
    <?php endif; ?>
    <dd>
        <span class="text-muted"><?php echo e(format_address($locationCurrent->getAddress(), false)); ?></span>
    </dd>
</dl>

