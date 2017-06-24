<div class="comments-wrap">
	<?php 
	foreach ($comments as $comment) {
		?>
			<h4>
				<a href="<?php comment_author_url(); ?>">
					<?php comment_author(); ?>
				</a> — 
				<small>
					<?php comment_date(); ?>
				</small>
			</h4>
			<div class="comment_body">
				<p>
					<?php comment_text(); ?>
				</p>
			</div><!-- comment_body -->
		<?php
	}//foreach
	?>
</div>

<?php
if( comments_open() ){
	?>
	<h4>Leave a comment</h4>
	<form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" >
		<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" >
		<input type="text" name="author">
		<input type="text" name="email">
		<input type="text" name="url">
		<textarea name="comment" id="" cols="60" rows="7"></textarea>
		<button type="submit">Add comment</button>
	</form>

	<?php 
}else{
	_e('Comments are closed', 'newTheme');
}