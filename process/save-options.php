<?php

	function nt_admin_save_options(){

		if ( ! current_user_can( 'edit_theme_options' ) ){

			wp_die(
				'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
				'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
				403
			);

		}

		check_admin_referer( 'nt_options_virify' );

		$opts 							=	get_option( 'nt_opts' );// by activate.php
		$opts['twitter']				=	sanitize_text_field( $_POST['nt_input_twitter'] );
		$opts['facebook']				=	sanitize_text_field( $_POST['nt_input_facebook'] );
		$opts['youtube']				=	sanitize_text_field( $_POST['nt_input_youtube'] );
		$opts['logo_type']				= 	absint( $_POST['nt_input_logo_type'] );
		// $opts['logo_img'] 				=	( $_POST['nt_input_image_link'] );	
		$opts['footer_text']			=	$_POST['nt_textarea_footer'];

		update_option( 'nt_opts', $opts );
		wp_redirect( admin_url( 'admin.php?page=nt_theme_options_page&status_save=1' ) );

	}