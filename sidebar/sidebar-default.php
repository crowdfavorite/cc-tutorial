<?php


if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
<div id="secondary" class="c6-56">
	<h1>Default Sidebar</h1>
	<?php dynamic_sidebar('sidebar-default'); ?>
</div><!--#secondary-->
