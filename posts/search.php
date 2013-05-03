<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

$s = get_query_var('s');

if (get_option('permalink_structure') != '') {
	$search_title = '<a href="'.esc_attr(site_url('search/'.urlencode($s))).'">'.esc_html($s).'</a>';
}
else {
	$search_title = '<a href="'.esc_attr(site_url('?s='.urlencode($s))).'">'.esc_html($s).'</a>';
}
?>

<div id="primary" class="c6-1234">
	<h1><?php printf(__('Search Results for: %s', 'carrington-blueprint'), $search_title); ?></h1>
	<?php
	// For the loop used, look in /loops
	cfct_loop();
	?>
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>