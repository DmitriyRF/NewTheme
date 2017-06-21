<?php

//Set up
add_theme_support( 'menus');


//Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');

//Action & Filter hooks
add_action( 'wp_enqueue_scripts', 'nT_enqueue' );
add_action( 'after_setup_theme', 'nT_register_menus' );
 


//Shortcode