<?php
/**
 * Created by PhpStorm.
 * User: cjones
 * Date: 11/6/2014
 * Time: 11:05 AM
 * TODO: Sanitize all post parameters
 */
require_once('/home/ttraiters/public_html/wp-blog-header.php');

//Check to see if they can edit theme options
if (!current_user_can('edit_theme_options')) {
    wp_die('You do not have sufficient permissions to access this page.');
}

if (isset($_POST["values_changed"]) && $_POST["values_changed"] == 'Y') {
    update_option("wmanager_limit", $_POST['wmanager_limit']);
    $new_obj = array();
    for ($x = 0; $x <= $_POST['wmanager_limit']; $x++) {
        $new_obj[$x]['stars'] = 0;
        $new_obj[$x]['hit'] = false;
        $new_obj[$x]['claimed'] = false;
    }
    update_option('wmanager_data',json_encode($new_obj));
}
//update_option("synfeat_featured", $sliderFrames);
//header('Location: /dev/wp-admin/themes.php?page=featured-settings');