
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>" >
	<div class="input_group">
		<input type="text" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="search">
		<input type="submit" id="searchsubmit" value="Search">
	</div>
</form>

