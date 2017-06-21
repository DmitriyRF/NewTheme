<?php

//Set up


//Includes
include(get_template_directory() . '/includes/front/enqueue.php');

//Action & Filter hooks

//add_action( string $tag, 			callable $function_to_add, int $priority = 10, int $accepted_args = 1 	);
  add_action( 'wp_enqueue_scripts', 'nT_enqueue' 															);


//Shortcode