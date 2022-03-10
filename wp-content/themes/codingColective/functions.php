<?php

add_theme_support('post-thumbnails');
add_theme_support('html5');


function themename_widgets_init()
{
    register_sidebar([
        'name'           => 'promotion-page',
        'id'             => "promotion-page",
        'description'    => 'Promotion Page',
        'class'          => 'promotion',
    ]);
}

add_action('init', 'themename_widgets_init');


function register_nav()
{
    register_nav_menus(
        [
            'menu_navbar' => 'Menu Navbar',
            'menu_footer' => 'Menu Footer'
        ]
    );
}
add_action('init', 'register_nav');


function cc_script()
{
    // style utama
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('cc_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
}

add_action('wp_enqueue_scripts', 'cc_script');
