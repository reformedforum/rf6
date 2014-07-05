<form action="<?php echo home_url('/'); ?>" method="get" role="search">
	<input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" class="searchbox-inputtext" id="searchbox-inputtext" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>"/>
	<label class="searchbox-icon" for="searchbox-inputtext"></label>
	<input type="submit" class="searchbox-submit" value="<?php _e('Search', 'roots'); ?>"/>
</form>
