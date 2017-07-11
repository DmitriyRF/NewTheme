<?php 
	$theme_option 				= 	get_option( 'nt_opts');// by activate.php
?>
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
					<?php
						if( $theme_option['logo_type'] == 1){
							?>
								<a href="index.html" class="navbar-brand">
									<?php bloginfo('name'); ?>
								</a>
							<?php
						}else{
							?>
								<a href="index.html" class="navbar-brand">
									<img src="<?php echo $theme_option['logo_img']; ?>" alt="<?php bloginfo('name'); ?>">
								</a>
							<?php
						}
					?>
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
		<?php
			if( !empty($theme_option['twitter']) ){
				?>
				<li>
					<a href="https://twitter.com/<?php echo $theme_option['twitter']; ?>">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<?php
			}
			if( !empty($theme_option['facebook']) ){
				?>
				<li>
					<a href="https://facebook.com/<?php echo $theme_option['facebook']; ?>">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<?php
			}
			if( !empty($theme_option['youtube']) ){
				?>
				<li>
					<a href="https://youtube.com/<?php echo $theme_option['youtube']; ?>">
						<i class="fa fa-youtube"></i>
					</a>
				</li>
				<?php
			}
		?>
	</nav>
	<header>
		
	</header>