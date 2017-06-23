<?php 

function nt_widgets_init(){
	
	register_sidebar(array(
		'name'					=> __( 'Main sidebar', 'newTheme'),
		'id'					=> 'nt_m_sidebar',
		'description'			=> __( 'Sidebar for theme newTheme', 'newTheme'),
		'class'					=> '',
		'before_widget' 		=> '<div id="%1$s" class="card %2$s">',
		'after_widget'  		=> '</div></div>',
		'before_title'  		=> '<h2 class="widgettitle">',
		'after_title'   		=> '</h2><div class="widget>'

	));
}