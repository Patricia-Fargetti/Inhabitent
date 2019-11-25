<?php

/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>
			<h2> Price: $<?php the_field('price'); ?></h2>

			<?php get_template_part('template-parts/content', 'content'); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>

		<?php endwhile; // End of the loop. 
		?>
		<div class="socialmedia">
			<a class="like" href="#"> <span> <i class="fab fa-facebook-square"></i> </span> LIKE</a>
			<a class="like" href="#"> <span><i class="fab fa-twitter-square"></i></span> TWEET </a>
			<a class="like" href="#"> <span><i class="fab fa-pinterest"></i></span> PIN</a>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>