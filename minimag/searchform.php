<form method="GET" action="<?php get_site_url(); ?>">
	<input class="search_input" type="text" name="s" placeholder="<?php echo __('Type your search', 'minimag'); ?>" 
	value="<?php the_search_query(); ?>" />
	<input class="search_submit" type="submit" value="<?php echo __('Search', 'minimag'); ?>" />
</form>