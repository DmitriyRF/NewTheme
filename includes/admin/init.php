<?php

	function nt_admin_init(){

		include( 'enqueue.php' );

		add_action( 'admin_enqueue_scripts', 'nt_admin_enqueue' );
		
	}