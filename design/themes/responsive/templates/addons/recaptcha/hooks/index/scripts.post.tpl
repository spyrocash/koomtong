<script type="text/javascript">
    (function (_, $) {
        _.tr({
            error_validator_recaptcha: '{__("error_validator_recaptcha")|escape:"javascript"}'
        });

        $.extend(_, {
            recaptcha_settings: {
                site_key: '{$addons.recaptcha.recaptcha_site_key|escape:javascript nofilter}',
                theme: '{$addons.recaptcha.recaptcha_theme|escape:javascript nofilter}',
                type: '{$addons.recaptcha.recaptcha_type|escape:javascript nofilter}',
                size: '{$addons.recaptcha.recaptcha_size|escape:javascript nofilter}'
            }
        });
    }(Tygh, Tygh.$));

    // Proxies event handler to class method
    window.onRecaptchaLoaded = function () {
        Tygh.onRecaptchaLoaded();
    };
</script>
{script src="js/addons/recaptcha/recaptcha.js"}
<script src="https://www.google.com/recaptcha/api.js?onload=onRecaptchaLoaded&render=explicit"></script>
