<div class="card mb-3">
    <div class="card-body">
        <form
            method="GET"
            id="filter-search-form"
            class="form-search form-horizontal"
            action="<?php echo e(current_url()); ?>"
        >
            <div class="input-group">
                <input
                    type="search"
                    class="form-control"
                    name="search"
                    value="<?php echo e($filterSearch); ?>"
                    placeholder="<?php echo app('translator')->get('igniter.local::default.text_filter_search'); ?>"
                />
                <button
                    class="btn btn-light"
                    type="submit"
                ><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
</div>

