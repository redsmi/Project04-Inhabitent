<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer testingfooter" role="contentinfo">
				<div class="footer-blocks container">
					<div class="footer-block-item-small">
						<div class="contact">
							<h3>Contact Info</h3>
							<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
							<p><i class="fas fa-mobile"></i><a href="tel:5553434567891">778-456-7891</a></p>
							<p>
								<span><i class="fab fa-facebook-square"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></span>
							</p>
						</div><!-- .contact -->
					</div>
					<div class="footer-block-item-small">
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
							<p><span class="day-of-week">Sunday:</span> Closed</p>
						</div><!-- .business-hours -->
					</div>
					<div class="footer-block-item-large">
						<div class="text-logo">
							<a href="http://google.ca" rel="home">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
							</a>
						</div><!-- .text-logo -->
					</div>
				</div><!-- footer blocks container -->
				<div class="site-info">
					<p>Copyright &copy 2017 Inhabitent</p>					
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
