<?php

/*
 * Plugin Name : Customer Widget For SiteOrigin Page Builder
 * Version: 0.1
 * Author: Madan
 */

//will check subfolders of this folder for PHP files. If it finds any PHP files with a metadata header containing a Widget Name field, it will list them as a widget which can be activated and used anywhere widgets may normally be used.
function add_my_custom_widget_for_site_origin($folders){
    $folders[] = plugin_dir_path(__FILE__).'widgets/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders',  'add_my_custom_widget_for_site_origin');