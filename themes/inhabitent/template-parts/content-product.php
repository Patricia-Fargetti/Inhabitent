<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <header class="entry-header">
            <div class="product-meta">
                <?php the_title(sprintf('<p class="entry-title dots"><span><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></span></p>'); ?>
                <p class="price"> Price: $<?php the_field('price'); ?></p>
                <!-- get the price -->

            </div>

        </header><!-- .entry-header -->
        <!-- <div class="dots-after"><span>Title Here</span></div> -->

</article><!-- #post-## -->