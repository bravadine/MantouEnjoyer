
<div class="container">
    <div class="row py-4">
        <div class="col col-sm-10 center-block">
            <div class="card mb-1">
                <div class="card-body">
                    <?php echo controller()->renderPartial('account/welcome'); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php echo controller()->renderComponent('booking'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
