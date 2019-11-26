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
                            <img src=<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg' ?> alt=<?php echo $term->name; ?> />
                            <p><?php echo $term->description; ?></p>
                            <p><a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'ASC'
        );
        $product_posts = get_posts($args); // returns an array of posts
        ?>

        <section class="latest-posts">
            <div class="container">
                <h2 class="section-name"> Inhabitent Journal</h2>
                <div class="f-journals">
                    <?php
                    foreach ($product_posts as $post) : setup_postdata($post); ?>
                        <article class='f-journal'>
                            <div class='journal-thumbnail' style='background-image: url(" <?php the_post_thumbnail_url() ?> ");'> </div>

                            <div class="journal-meta">
                                <p class="read-entry"><a href="<?php echo get_post_permalink($post); ?>"> Read entry</a></p>
                                <h3 class='related-post-title'> <?php the_title(); ?></h3>
                                <div class='comments-post'> <?php comments_number(); ?> </div>

                            </div>

                        </article>
                    <?php
                    endforeach;
                    wp_reset_postdata();  ?>
                </div>
            </div>
        </section>
        <article class="latest-adventures container">
            <div class="title-of-post">
                <h2> LATEST ADVENTURES </h2>
            </div>
            <div class="wrapping">
                <img class="canoe-girl" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg' ?>" alt="canoeing">
                <div class="naturetxt">
                    <h3 class="titulo">
                        <a href="#"> Getting Back to <br> Nature in a Canoe</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>

                <img class="beach" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg' ?>" alt="beach">
                <div class="nighttxt">
                    <h3 class="titulo">
                        <a href="#">A Night with Friends <br> at the Beach</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>

                <img class="mountain" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg' ?>" alt="hikers">
                <div class="viewtxt">
                    <h3 class="titulo">
                        <a href="#">Taking in the<br> View at<br> Big Mountain</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>

                <img class="sky" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg' ?>" alt="hikers">
                <div class="startxt">
                    <h3 class="titulo">
                        <a href="#">Star-Gazing at<br> the Night Sky</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>
                <div class="more-adv-btn">
                    <p> MORE ADVENTURES </p>
                </div>

            </div>


        </article>


    </main><!-- #main -->
</div><!-- #primary -->









<?php get_footer(); ?>