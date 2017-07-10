<?php

	function nt_admin_menus(){
		// add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, 
		// 											callable $function = '', string $icon_url = '', int $position = null )
		add_menu_page(
			__( 'Settings', 'newTheme'),
			__( 'NewTheme', 'newTheme'),
			'edit_theme_options',
			'nt_theme_options_page',
			'nt_theme_options_function'
		);	

		//add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, 
		//							callable $function = '' )
		add_submenu_page( 
			'nt_theme_options_page', 
			__( 'Settings', 'newTheme'), 
			__( 'NewTheme options', 'newTheme'),
			'edit_theme_options',
			'nt_theme_options_page',
			'nt_theme_options_function'
    	);
	}
