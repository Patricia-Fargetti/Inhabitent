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





			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('large'); ?>
				<?php endif; ?>
				<header class="entry-header">


					<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
					<div class="entry-content">
						<h2>$<?php the_field('price'); ?></h2>
						<?php the_excerpt(); ?>
						<div class="socialmedia">
							<a class="like" href="#"> <span> <i class="fab fa-facebook-square"></i> </span> LIKE</a>
							<a class="like" href="#"> <span><i class="fab fa-twitter-square"></i></span> TWEET </a>
							<a class="like" href="#"> <span><i class="fab fa-pinterest"></i></span> PIN</a>
						</div>


					</div><!-- .entry-content -->
				</header><!-- .entry-header -->
			</article><!-- #post-## -->


			<?php get_template_part('template-parts/content', 'none'); ?>


			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>

		<?php endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>