<?php

function nT_enqueue(){

	/*<?php wp_register_style( $handle, $src, $deps, $ver, $media ); ?>*/
	wp_register_style( 'nT-bootstrap-4-a', get_template_directory_uri() . '/assets/bootstrap_4_a_6/css/bootstrap.css');

	wp_enqueue_style( 'nT-bootstrap-4-a');
	
}