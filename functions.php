<?php

//Set up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


//Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');

include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');
include(get_template_directory() . '/process/save-options.php');

//Action & Filter hooks
add_action( 'wp_enqueue_scripts', 'nt_enqueue' );
add_action( 'after_setup_theme', 'nt_register_menus' );
add_action( 'widgets_init', 'nt_widgets_init' );

add_action( 'after_switch_theme', 'nt_theme_activate' );
add_action( 'admin_menu', 'nt_admin_menus' );
add_action( 'admin_init', 'nt_admin_init');


//Shortcode