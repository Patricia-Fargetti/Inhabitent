<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );




	function my_login_logo() { ?>
		<style type="text/css">
			#login h1 a, .login h1 a {
				background-image: url("<?php echo get_template_directory_uri
				(); ?>/images/logos/inhabitent-logo-tent.svg");
			height:65px;
			width:320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
				padding-bottom: 30px;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	add_filter('login_headerurl','my-custom-login_url');
	function my_custom_login_url($url)
	{
		return home_url();
	}
	
	
	
