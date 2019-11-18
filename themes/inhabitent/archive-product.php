<?php

/**
 * The template for displaying archive pages.
 * THAT'S THE SHOP PAGE
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
					the_archive_title('<h1 class="shop">', '</h1>');
					the_archive_description('<div class="taxonomy-description">', '</div>');
					?>
				<?php
					$terms = get_terms(array(
						'taxonomy' => 'product_type',
						'hide_empty' => 0,
					));
					if (!empty($terms) && !is_wp_error($terms)) :
						?>
					<h1 class="page-title-archive">Shop Stuff</h1>
					<div class="first-page-product-choose">

						<?php foreach ($terms as $term) : ?>
							<div class="product-type-block-wrapper">
								<p><a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?></a></p>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</header><!-- .page-header -->
			<div class="grid">
				<div class="grid-item">
					<div class="wrapper">
						<?php /* Start the Loop */ ?>
						<?php while (have_posts()) : the_post(); ?>

							<?php
									get_template_part('template-parts/content');
									?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part('template-parts/content', 'none'); ?>

					<?php endif; ?>

					</div>
				</div>
			</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>