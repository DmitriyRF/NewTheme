<?php

	function nt_theme_options_function(){

	if ( ! current_user_can( 'edit_theme_options' ) ){

		wp_die(
			'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
			'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
			403
		);

	}
	$title 		= __( 'New Theme options' );
	?>
		<div class="wrap">
			<h1><?php echo esc_html( $title ); ?></h1>
			<form method="post" action="admin-post.php">
				<input type="hidden" name="action" value="nt_seve_options">
				<?php 
					//The nonce field is used to validate that the contents of the form request came from the current site and not somewhere else
					wp_nonce_field('nt_options_virify');  
				?>
				<table class="form-table">
					<tr>
						<th scope="row">
							<label  ><?php _e('Social links', 'newTheme');?></label>
						</th>
						<td>
							<table class="form-table">
								<tr>
									<th>
										<label for="nt_input_facebook"  ><?php _e('Facebook', 'newTheme');?></label>
									</th>
									<td>
										<input id="nt_input_facebook"  size="50" name="nt_input_facebook" type="text">
									</td>
								</tr>
								<tr>
									<th>
										<label for="nt_input_twitter"  ><?php _e('Twitter', 'newTheme');?></label>
									</th>
									<td>
										<input id="nt_input_twitter"  size="50" name="nt_input_twitter" type="text">
									</td>
								</tr>
								<tr>
									<th>
										<label for="nt_input_youtube"  ><?php _e('Youtube', 'newTheme');?></label>
									</th>
									<td>
										<input id="nt_input_youtube"  size="50" name="nt_input_youtube" type="text">
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label  ><?php _e('Logo', 'newTheme');?></label>
						</th>
						<td>
							<table class="form-table">
								<tr>						
									<th scope="row">
										<label for="nt_input_logo_type" ><?php _e('Logo type', 'newTheme');?></label>
									</th>
									<td>
										<input name="nt_input_logo_type" type="radio" value="1" checked><?php _e( 'Site name', 'newTheme' ); ?>
										<br>
									    <input name="nt_input_logo_type" type="radio" value="2"><?php _e( 'Image', 'newTheme' ); ?>
									</td>
								</tr>
								<tr>
									<td>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-secondary" type="button"><?php _e('Upload image', 'newTheme'); ?></button>
											</span>
											<input id="nt_input_image_link" class="input-group-text" size="50" name="nt_input_image_link" type="text">
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="nt_textarea_footer"  ><?php _e('Footer links') ?></label>
						</th>
						<td>
							<textarea id="nt_textarea_footer"  rows="10" cols="75" name="nt_textarea_footer" type="text"></textarea>
						</td>					
					</tr>
				</table>

				<?php 
					// Prints out all settings sections added to a particular settings page.
					do_settings_sections( 'nt_theme_options_page' ); 

					// Echoes a submit button, with provided text and appropriate class(es).
					submit_button(); 
				?>
			</form>
		</div>

	<?php
	}
