
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto my-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title h4 mb-4 font-weight-normal">
                        <?php echo app('translator')->get('main::lang.account.login.text_register'); ?>
                    </h1>

                    <?php echo controller()->renderPartial('account::register'); ?>
                </div>
            </div>
        </div>
    </div>
</div>