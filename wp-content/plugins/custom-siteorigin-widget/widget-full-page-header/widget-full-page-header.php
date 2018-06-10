<?php

/*
 * Widget Name: Widget Full Page Header
 * Description: Widget to create full page image
 * Author: Madan
 */

class Widget_Full_Page_Header extends SiteOrigin_Widget{

    function get_template_name($instance)
    {
        return '';
    }

    function get_style_name($instance)
    {
        return '';
    }

}

siteorigin_widget_register('widget-full-page-header', __FILE__, 'Widget_Full_Page_Header');
