<?php

/*
 * Widget Name: Col 6 By 6
 * Description: Widget to create half text and half image
 * Version: 0.1
 * Author: Madan
 */

class Widget_Col_6_By_6 extends SiteOrigin_Widget{

    function __construct() {
        $form_options = array(
            'some_tinymce_editor' => array(
                'type' => 'tinymce',
                'label' => __( 'Visually edit, richly.', 'widget-form-fields-text-domain' ),
                'default' => 'An example of a long message.</br>It is even possible to add a few html tags.</br><a href="siteorigin.com" target="_blank"">Links!</a>',
                'rows' => 10,
                'default_editor' => 'html',
                'button_filters' => array(
                    'mce_buttons' => array( $this, 'filter_mce_buttons' ),
                    'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
                    'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
                    'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
                    'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
                ),
            ),
            'some_text' => array(
                'type' => 'text',
                'label' => __( 'Some text goes here', 'widget-form-fields-text-domain' ),
                'default' => 'Some default text.'
            ),
            'some_url' => array(
                'type' => 'link',
                'label' => __('Some URL goes here', 'widget-form-fields-text-domain'),
                'default' => 'http://www.example.com'
            ),
            'some_color' => array(
                'type' => 'color',
                'label' => __( 'Choose a color', 'widget-form-fields-text-domain' ),
                'default' => '#bada55'
            ),
            'some_long_message' => array(
                'type' => 'textarea',
                'label' => __( 'Type a message', 'widget-form-fields-text-domain' ),
                'default' => 'An example of a long message.</br>It is even possible to add a few html tags.</br><a href="siteorigin.com" target="_blank"">Links!</a></br><strong>Strong</strong> and <em>emphasized</em> text.',
                'rows' => 5
            ),
            'some_media' => array(
                'type' => 'media',
                'label' => __( 'Choose a media thing', 'widget-form-fields-text-domain' ),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',//'image', 'audio', 'video', 'file'
                'fallback' => true
            ),
            'a_section' => array(
                'type' => 'section',
                'label' => __( 'A section containing related fields.' , 'widget-form-fields-text-domain' ),
                'hide' => true,
                'fields' => array(
                    'grouped_text' => array(
                        'type' => 'text',
                        'label' => __( 'A grouped text field', 'widget-form-fields-text-domain' )
                    ),
                    'grouped_checkbox' => array(
                        'type' => 'checkbox',
                        'label' => __( 'A grouped checkbox', 'widget-form-fields-text-domain' )
                    )
                )
            ),
            'some_widget' => array(
                'type' => 'widget',
                'label' => __( 'Button Widget', 'widget-form-fields-text-domain' ),
                'class' => 'SiteOrigin_Widget_Button_Widget',
                'hide' => true
            ),
            'some_icon' => array(
                'type' => 'icon',
                'label' => __('Select an icon', 'widget-form-fields-text-domain')
            )
        );
        parent::__construct(
            'col-6-by-6-widget',
            __('Widget 2 Form Fields Example', 'widget-form-fields-text-domain'),
            array(
                'description' => __('A blank widget which simply demonstrates the use of all the widget admin form fields.', 'widget-form-fields-text-domain'),
            ),
            array(),
            $form_options,
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance) {
        return 'col-6-template';
    }
    function get_template_dir($instance) {
        return 'col-6-template';
    }

}

siteorigin_widget_register('col-6-by-6-widget', __FILE__, 'Widget_Col_6_By_6');
