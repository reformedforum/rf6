

<div class="not-found-404">
	<h2>404<i class="iscon-remove-sign skin-text"></i></h2>
	<?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>
	
	<?php //get_search_form(); ?>

	<form action="<?php echo home_url('/'); ?>" id="search-form" class="form-wrapper" method="get">

		<div class="search-404">

			<input type="text" name="s" class="inputStyle search-text"/>
			<input type="submit" value="Search" class="search-submit"/>

		</div>
	</form>                        
</div>
				