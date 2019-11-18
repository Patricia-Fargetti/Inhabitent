<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('name'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p class="site-description"><?php bloginfo('description'); ?></p>
			</div><!-- .site-branding -->


			<div class="header-menu">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
				</nav><!-- #site-navigation -->
				<a href="<?php echo home_url(); ?>">
					<img class="tent-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" />
				</a>
			</div>
			<!--header-menu -->
			<div class="search_form"><?php get_search_form(); ?> </div>

		</header><!-- #masthead -->

		<div id="content" class="site-content">
			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">
					<div class="find-us-content">

						<?php while (have_posts()) : the_post(); ?>

							<?php get_template_part('template-parts/content', 'page'); ?>

						<?php endwhile; // End of the loop. 
						?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>
			<?php get_footer(); ?>