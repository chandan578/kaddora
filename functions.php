<?php

/**
 * Themem Functions
 * 
 * @package Kaddora
 */

//  print_r(filemtime(get_template_directory().'/style.css'));
//  wp_die();

function kaddor_enqueue_scripts()
{
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true);

    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'kaddor_enqueue_scripts');

?>