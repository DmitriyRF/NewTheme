<?php/*
	Template Name: Full Width Page
*/?>

<?php get_header(); ?>
<main>
	<section id="blog">
		<div class="container">
			<div class="row">
				<section class="blog-post">
					<div class="col-sm-12">
						<?php
						if( have_posts() ){
							while( have_posts() ){

								the_post();
									// Post Content here		
								?>
								<article class="card">
									<div class="card-image">
										<!--img src="" alt="" class="image-responsive"-->
										<?php the_post_thumbnail(full, array('class' => 'image-responsive', ) ); ?>
									</div>
									<div class="card-content">
										<h3>
											<span class="data"><?php the_time( 'd M' ); ?></span>
											<a href="<?php the_permalink(); ?>" title=""><?php the_title();?></a>
										</h3>
										<?php the_content(); ?>
										<?php comments_template(); ?>
									</div>
								</article>	
						<?php 
							}// end while
						}// end if
						?>
					</div>
				</section>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
