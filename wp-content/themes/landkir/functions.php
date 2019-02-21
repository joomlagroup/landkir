<?php

if (!class_exists('ReduxFramewrk')) {
    require_once(dirname(__FILE__) . '/ReduxCore/framework.php');
}
if (!isset($redux_demo)) {
    require_once(dirname(__FILE__) . '/ReduxCore/theme-option.php');
}

if (STYLESHEETPATH == TEMPLATEPATH) {
    define('OF_FILEPATH', TEMPLATEPATH);
    define('OF_DIRECTORY', get_template_directory_uri());
} else {
    define('OF_FILEPATH', STYLESHEETPATH);
    define('OF_DIRECTORY', get_stylesheet_directory_uri());
}
include "bfi_thumb/BFI_Thumb.php";
include 'inc/shortcode.php';
include 'inc/register_custom_postype.php';

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(

            'main-nav' => 'The Main Menu',
            'mobile-nav' => 'The Mobile Menu',
            'footer-nav' => 'Footer Menu',

        )
    );
}
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

if( function_exists('acf_add_options_page') ) {
   acf_add_options_page();
}

if(!is_admin()){
    $cssUrl = get_template_directory_uri() . '/css';
    $jsUrl = get_template_directory_uri() . '/js';
    wp_enqueue_script('script',$jsUrl . '/main.js',array('jquery'),'1.0',true);
    //wp_enqueue_script('script1',$jsUrl . '/pace.js',array('jquery'),'1.0',true);

    wp_register_style('theme_style_animate',  'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css',array(),'1.0');
    wp_enqueue_style('theme_style_animate');

   /// wp_enqueue_script('script1',  $jsUrl . '/fullpage.js',array('jquery'),'1.0',true);
    wp_register_style('theme_style_fullpage',  $cssUrl . '/fullpage.css',array(),'1.0');

    wp_enqueue_style('theme_style_fullpage');
}
