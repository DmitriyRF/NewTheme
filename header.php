<!DOCTYPE html>
<html lang="en"><!--html end in footer.php -->
<head>
	<meta charset="UTF-8">
	<title>newTheme</title>

	<?php wp_head(); ?>

</head>
<body> <!--body end in footer.php -->
	<nav>
		<?php 
		wp_nav_menu(array(
			'menu' 						=> 'primary',
			'container' 				=> false,
			'menu_class'				=> 'nav navbar-nav'
		)); 
		?>
	</nav>
	<header>
		
	</header>