/**
 * Created by cjones on 10/30/2014.
 */
jQuery(document).ready(function () {
    jQuery('#wmanager_submit').click(function (e) {
        e.preventDefault();
        jQuery('#wmanager-settings-form-admin').ajaxSubmit();
        jQuery('#success_tooltip').show(1000);
        setTimeout(function () {
            jQuery('#success_tooltip').hide(1000);
        }, 4000);
    });
});