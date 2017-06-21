<?php

//Set up


//Includes
include(get_template_directory() . '/includes/front/enqueue.php');

//Action & Filter hooks
add_action( 'wp_enqueue_scripts', 'nT_enqueue' );


//Shortcode