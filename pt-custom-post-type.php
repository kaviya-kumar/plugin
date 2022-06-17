<?php

/**
 * Plugin Name: PT Custom Post Types
 */

function create_posttype()
{
    register_post_type(
        'testimonial',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('testimonial'),
                'singular_name' => __('testimonial')
            ),
            'rewrite' => array('slug' => 'testimonial'),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action('init', 'create_posttype');

function create_posttype_plugin()
{
    register_post_type(
        'event',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('event'),
                'singular_name' => __('event')
            ),
            'rewrite' => array('slug' => 'event'),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action('init', 'create_posttype_plugin');
