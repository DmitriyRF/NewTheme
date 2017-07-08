<?php

	function nt_admin_enqueue(){

		if( !isset( $_GET['page'] ) || $_GET['page']!= "nt_theme_options_page" ){
			return;
		}

		/* wp_register_style( $handle, $src, $deps, $ver, $media ); */
		wp_register_style( 'nt-bootstrap-4-a', get_template_directory_uri() . '/assets/bootstrap_4_a_6/css/bootstrap.css');

		wp_enqueue_style( 'nt-bootstrap-4-a');



		/*wp_register_script( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )*/
		wp_register_script( 'nt-bootstrap-4-a', get_template_directory_uri() . '/assets/bootstrap_4_a_6/js/bootstrap.js', array('jquery'), null, true);
		wp_register_script( 'nt-options', get_template_directory_uri() . '/assets/scripts/options.js', array('jquery'), false, true);

		wp_enqueue_script('nt-options');
		wp_enqueue_script('nt-bootstrap-4-a');
	}
