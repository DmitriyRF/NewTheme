<?php 
	function nt_theme_activate(){

		if ( version_compare( get_bloginfo( 'version' ), '4.8', '<')) {
			wp_die( __('You must have a minimum version of 4.8 to use this theme.') );		    
		}

		$theme_opts						=	get_option( 'nt_opts' );//if not exist then return false

		if( !$theme_opts ){

			$opts_data_for_nt_opts		=	array(
				'facebook' 				=>	'',
				'twitter' 				=>	'',
				'youtube' 				=>	'',
				'logo_type'				=>	1,
				'logo_img' 				=>	'',
				'footer_text'			=>	''
			);	
			// add_option( $option, $value, $deprecated, $autoload ); 		

			add_option( 'nt_opts', $opts_data_for_nt_opts);
		}
	}
?>