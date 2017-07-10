<?php

	function nt_admin_init(){

		include( 'enqueue.php' );

		add_action( 'admin_enqueue_scripts', 'nt_admin_enqueue' );
		//			 admin_post_$your_action_name
		add_action( 'admin_post_nt_seve_options', 'nt_admin_save_options' );
		
	}