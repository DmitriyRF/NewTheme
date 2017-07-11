
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 col-xl-6">
					<p>
						<?php 
							$theme_option 				= 	get_option( 'nt_opts');// by activate.php
							echo $theme_option['footer_text'];
						?>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>	
</body> <!-- body start in header.php -->
</html> <!-- html start in header.php -->