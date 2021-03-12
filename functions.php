<?php

function theme_support(){
    // Adds dynamic title tag in head
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');
}
add_action('after_setup_theme', 'theme_support');

function theme_menus(){
    $locations = array(
        'primary' => "Top menu"
    );

    register_nav_menus($locations);
}
add_action('init', 'theme_menus');

function theme_register_styles(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('theme-stylesheet', get_template_directory_uri() . "/style.css", array('theme-fonts'),  $version, "all");
    wp_enqueue_style('theme-fonts', "https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap", array(),  "1.0", "all");
}
add_action('wp_enqueue_scripts', 'theme_register_styles');

function add_theme_scripts(){
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', '1.0', true);
}
add_theme_scripts();

?>