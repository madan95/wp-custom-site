<?php

/*
 * Widget Name: Col-6-by-6
 * Description: Widget to create full page image
 * Author: Madan
 */

class Widget_Col_6_By_6 extends SiteOrigin_Widget{


    function get_template_name($instance)
    {
        return '';
    }

    function get_style_name($instance)
    {
        return '';
    }

}

siteorigin_widget_register('widget-col-6-by-6', __FILE__, 'Widget_Col_6_By_6');
