

<?php get_header(); ?>
	<main>
		<section id="blog">
			<div class="container">
				<div class="row">
					<section class="blog-post">
						<div class="col-sm-8">
							<?php

								if( have_posts() ){
									while( have_posts() ){

										the_post();
										// Post Content here		
									?>

									<article class="card">
										<?php 
											if( has_post_thumbnail() ){
										?>
											<div class="card-image">
												<!--img src="" alt="" class="image-responsive"-->
												<?php the_post_thumbnail(full, array('class' => 'image-responsive', ) ); ?>
												
											</div>
										<?php 
											}//if( has_post_thumbnail() )
										?>
										<div class="card-content">
											<h3>
												<span class="data"><?php the_time( 'd M' ); ?></span>
												<a href="<?php the_permalink(); ?>" title=""><?php the_title();?></a>
											</h3>
											<div class="card-info">
												<span class="time">Posted at <?php the_time( 'g:i a' );?></span>
												<span class="tag"><?php the_category(','); ?></span>
												<span class="post-author">by <a href="<?php the_author_link();?>"><?php the_author(); ?></a></span>
												
											</div>
											<?php the_content(); ?>
											<?php wp_link_pages(array(
												'before'           => '<p class="text-center">' . __( 'Pages:' ),
											)); ?>
											<?php the_tags(); ?>
										</div>
										<nav class="text-center">
											<ul class="pagination">
												<li>
													<?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i> %title'); ?>
												</li>
												<li>
													<?php next_post_link('%link', '%title <i class="fa fa-chevron-right"></i>'); ?>
												</li>
											</ul>
										</nav>
										<?php comments_template(); ?>
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
	<aside class='m-sidebar col-md-4'>
		<?php get_sidebar(); ?>
	</aside>
<?php get_footer(); ?>