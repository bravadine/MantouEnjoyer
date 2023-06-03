<?php
    $privacyPage = \System\Models\Pages_model::find($this->theme->gdpr_more_info_link)
?>
<div
    id="euCookieBanner"
    data-control="cookie-banner"
    data-active="<?php echo e($this->theme->enable_gdpr); ?>"
    style="display:none;"
>
    <div
        style="background-color: <?php echo e($this->theme->gdpr_background_color); ?>; color: <?php echo e($this->theme->gdpr_text_color); ?>;"
    >
        <div class="container">
            <div class="d-flex align-items-center">
                <p id="eu-cookie-message" class="mb-0">
                    <span><?php echo $this->theme->gdpr_cookie_message; ?></span>
                    <a
                        href="<?php echo e(site_url($privacyPage ? $privacyPage->permalink_slug : '')); ?>"
                    ><?php echo e($this->theme->gdpr_more_info_text); ?></a>
                </p>
                <a
                    id="eu-cookie-action"
                    class="btn btn-secondary ms-auto"
                    href="javascript:void(0);"
                ><?php echo e($this->theme->gdpr_accept_text); ?></a>
            </div>
        </div>
    </div>
</div>
