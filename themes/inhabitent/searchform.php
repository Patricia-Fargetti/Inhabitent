<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">


	<a href="#" class="icon-search" aria-hidden="true">
		<i class="fa fa-search"></i>
	</a>

	<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />

	<button class="search-submit screen-reader-text">
		<?php echo esc_html('Search'); ?>
	</button>

</form>