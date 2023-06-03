
<div class="container">
    <div class="row py-4">
        <div class="locations-filter col-sm-3">
            <?php echo controller()->renderPartial('localList::filter'); ?>
        </div>
        <div class="location-list col-sm-9">
            <?php echo controller()->renderPartial('localList::search'); ?>

            <?php echo controller()->renderPartial('localList::sorting'); ?>

            <?php echo controller()->renderComponent('localList'); ?>
        </div>
    </div>
</div>
