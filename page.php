<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>

<div id="primary" class="c6-1234">
	<?php
	// For the loop used, look in /loops
	cfct_loop();
	comments_template();
	?>
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>