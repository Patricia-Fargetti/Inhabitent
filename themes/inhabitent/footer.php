<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-style container">
		<div class="footer-block-item">
			<div class="this">
				<div class="contact-info">
					<h3> Contact Info </h3>
					<a href="mailto:info@inhabitent.com"><i class="fas fa-envelope"></i> info@inhabitent.com</a>
					<a href="tel:778-456-7891"><i class="fas fa-phone"></i> 778-456-7891</a>
					<p>
						<span> <i class="fab fa-facebook-square"></i> </span>
						<span><i class="fab fa-twitter-square"></i></span>
						<span><i class="fab fa-instagram"></i></span>
					</p>
				</div>
			</div>
		</div>
		<div class="footer-block-item">
			<div class="business">
				<h3> Business Hours </h3>
				<p>
					<span class="day-of-week"> Monday-Friday:</span>9am to 5pm
				</p>
				<p>
					<span class="day-of-week">Saturday:</span>10am to 2 pm
				</p>
				<p>
					<span class="day-of-week"> Sundays:</span>Closed
				</p>
			</div>
		</div>
		<div class="footer-block-item-img">
			<div class="footer-logo">

				<img src=<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-text.svg" ?> />
			</div>
		</div>
		<div class="container">
			<p class="copyright"> COPYRIGHT © 2019 INHABITENT</p>
		</div>
	</div> <!-- footer-style -->
	</div><!-- .site-info -->
	</div><!-- #page -->
</footer><!-- #colophon -->


</body>
<?php wp_footer(); ?>

</html>