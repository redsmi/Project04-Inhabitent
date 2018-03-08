<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer testingfooter" role="contentinfo">
				<div class="footer-blocks">
					<div class="contact">
							<h3>Contact Info</h3>
							<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
							<p><i class="fas fa-mobile"></i><a href="tel:5553434567891">778-456-7891</a></p>
							<p>
								<span><i class="fab fa-facebook-f"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></span>
							</p>
					</div>
					<div class="business-hours">
							<h3>Business Hours</h3>
							<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
							<p><span class="day-of-week">Sunday:</span> Closed</p>
					</div>
					<div class="footer-logo">
						<div class="text-logo">
							<a href="<?php esc_url(the_permalink()); ?>" rel="home">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
							</a>
						</div><!-- .text-logo -->
					</div>
				</div><!-- footer blocks container -->
				<div class="site-info">
					Copyright &copy; 2017 Inhabitent				
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
