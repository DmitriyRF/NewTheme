<!DOCTYPE html>
<html lang="en"><!--html end in footer.php -->
<head>
	<meta charset="UTF-8">
	<meta name="description" content="WordPress template theme">
	<meta name="keywords" content="WordPress,Bootstrap-4,HTML5,CSS3,XML,JavaScript,jQuery">
	<meta name="author" content="Dmitriy Romanovskiy">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>

</head>
<body> <!--body end in footer.php -->
	<nav>
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">
						<?php bloginfo('name'); ?>
					</a>
				</div>
			</div>
		</div>
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