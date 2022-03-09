<?php
add_theme_support('automatic-feed-links');
add_theme_support('custom-logo');
add_theme_support('custom-background', apply_filters('blossom_coach_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
)));
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('custom-logo', array(
    'height'      => 70,
    'width'       => 70,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array(
        'site-title', 'site-description'
    )
));
add_theme_support('custom-header', apply_filters('blossom_coach_custom_header_args', array(
    'default-image'  => esc_url(get_template_directory_uri() . '/images/banner-img.jpg'),
    'video'          => true,
    'width'          => 1920,
    'height'         => 700,
    'header-text'    => false,
)));
add_theme_support('jetpack-responsive-videos');

function themename_widgets_init()
{

    register_sidebar([
        'name'           => 'promotion-page',
        'id'             => "promotion-page",
        'description'    => 'Promotion Page',
        'class'          => 'promotion',
    ]);

    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'theme_name'),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Secondary Sidebar', 'theme_name'),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
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
