<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>

<div id="primary" class="c6-1234">

<?php
cfct_loop();
cfct_misc('nav-posts');
?>

</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>