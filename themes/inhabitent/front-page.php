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
        <section class="product-info-container">
            <h2> SHOP STUFF </h2>
            <div class="list-of-activities">
                <div class="list-each-item">
                    <img src="">
                    <p> Get back to nature with all the tools and toys you need to enjoy the great outdoors</p>
                    <p>
                        <a>
                    </p>
                    <div class="list-each-item">
                        <img src="">
                        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                        <p>
                            <a>
                        </p>
                        <div class="list-each-item">
                            <img src="">
                            <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
                            <p>
                                <a>
                            </p>
                            <div class="list-each-item">
                                <img src="">
                                <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                                <p>
                                    <a>
                                </p>



    </main><!-- #main -->
</div><!-- #primary -->









<?php get_footer(); ?>