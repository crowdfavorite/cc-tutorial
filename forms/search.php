<?php


if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$s = get_search_query();

// Generate unique ID for searchform, so this file can be loaded multiple times
$id = uniqid('s-');

if (get_option('permalink_structure') != '') {
	$onsubmit = "location.href=this.action+'search/'+encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;";
}
else {
	$onsubmit = '';
}

?>
<form role="search" class="searchform" method="get" action="<?php echo home_url('/'); ?>" onsubmit="<?php echo $onsubmit; ?>">
	<input type="text" id="<?php echo $id; ?>" class="s" name="s" value="<?php esc_attr_e($s); ?>" placeholder="Search" />
	<input type="submit" class="searchsubmit button" value="<?php _e('Search', 'carrington-blueprint'); ?>" />
</form>