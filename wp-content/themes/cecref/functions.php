<?php

function theme_cecref_register_assets(){
    wp_deregister_script('jquery');
    wp_enqueue_style('themececref', get_stylesheet_directory_uri().'/assets/sass/main.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('sub-menu.js', get_stylesheet_directory_uri().'/assets/js/sub-menu.js', array(), null, true);
}

function theme_cecref_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg xml';
    return $mimes;
}

add_action('wp_enqueue_scripts', 'theme_cecref_register_assets');
add_action('after_setup_theme', 'theme_cecref_supports');
add_filter('upload_mimes', 'wpc_mime_types');
register_nav_menu('header', 'menu principal');
