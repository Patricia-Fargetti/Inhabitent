<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->




	<div class="thumbnail-img">
<?php 
    $lastBlog = new WP_Query('post_type=post&posts_per_page=3');
    if ($lastBlog->have_posts()) {
        while($lastBlog->have_posts()) {
             $lastBlog->the_post();
              if(has_post_thumbnail()){
                  the_post_thumbnail('medium');
			 }
			 
			  the_title(); 
       the_content(); 
         }
     }
  ?>
 </div>

 

<?php get_sidebar(); ?>
<?php get_footer(); ?>