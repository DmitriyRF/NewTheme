<?php 

function nt_widgets_init(){
	
	register_sidebar(array(
		'name'					=> __( 'Main sidebar', 'newTheme'),
		'id'					=> 'nt_m_sidebar',
		'description'			=> __( 'Sidebar for theme newTheme', 'newTheme'),
		'class'					=> ''

	));
}