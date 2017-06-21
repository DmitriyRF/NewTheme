<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>newTheme</title>

	<?php wp_head(); ?>

</head>
<body>
	<nav>
		<?php 
		wp_nav_menu(array(
			'menu' 						=> 'primary',
			'container' 				=> false,
			'menu_class'				=> 'nav navbar-nav'
		)); 
		?>
	</nav>
	<header></header>

	<main></main>

	<footer></footer>
	
	<?php wp_footer(); ?>	
</body>
</html>