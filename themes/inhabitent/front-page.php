<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; // End of the loop. 
        ?>
        <section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'product_type',
                'hide_empty' => 0,
            ));
            if (!empty($terms) && !is_wp_error($terms)) :
                ?>
                <div class="product-type-blocks">
                    <?php foreach ($terms as $term) : ?>
                        <div class="product-type-block-wrapper">
                            <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                            <p><?php echo $term->description; ?></p>
                            <p><a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>



    </main><!-- #main -->
</div><!-- #primary -->









<?php get_footer(); ?>