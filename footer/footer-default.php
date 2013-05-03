<?php


if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
	</div><!-- #main -->
	<hr>
	<footer id="footer" class="site-footer" role="contentinfo">
<?php

	if (cfct_get_option('cfct_copyright') != null) {
		echo '<p>'.cfct_get_option('cfct_copyright').'</p>';
	}

	if (cfct_get_option('cfct_credit') == 'yes') {
?>
		<p id="developer-link"><?php printf(__('Development by <a href="http://crowdfavorite.com" title="Custom WordPress development, design and consulting services." rel="developer designer">%s</a>', 'carrington-blueprint'), 'Crowd Favorite'); ?></p>
<?php
	}
?>
	</footer><!--#footer -->

</div><!-- .container -->

<?php wp_footer() ?>

</body>
</html>