<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
            <div class="entry-header-tittle">
                <div class="product-meta dots">

                    <?php the_title('<p class="entry-title">', '</p>');
                    ?>
                    <p class="price"> Price: $<?php the_field('price'); ?></p>
                    <!-- get the price -->

                </div>
            </div>
        </a>
    </header><!-- .entry-header -->
    <!-- <div class="dots-after"><span>Title Here</span></div> -->

</article><!-- #post-## -->