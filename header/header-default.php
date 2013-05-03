<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<!-- Add the markup from header.php below! -->

<!-- ### Default WP Style ### -->

<!DOCTYPE html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container grid">
	<header id="masthead" class="site-header clearfix">
			<h1 id="site-name"><a href="<?php echo home_url('/'); ?>" title="<?php _e('Home', 'carrington-blueprint'); ?>"><?php bloginfo('name'); ?></a></h1>
	</header><!-- #masthead -->

	<div id="main" class="clearfix">

