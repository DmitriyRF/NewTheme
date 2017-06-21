<?php

function nT_enqueue(){

	/* wp_register_style( $handle, $src, $deps, $ver, $media ); */
	wp_register_style( 'nT-bootstrap-4-a', get_template_directory_uri() . '/assets/bootstrap_4_a_6/css/bootstrap.css');

	wp_enqueue_style( 'nT-bootstrap-4-a');

	/*wp_register_script( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )*/
	wp_register_script( 'nT-bootstrap-4-a', get_template_directory_uri() . '/assets/bootstrap_4_a_6/js/bootstrap.js', array('jquery'), null, true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('nT-bootstrap-4-a');
}