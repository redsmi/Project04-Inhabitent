<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<div class="social-media">
                <ul>

                    <li><a href="#"><i class="fab fa-facebook-square"></i><span class="socialmedianame">Faceboook</span></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i><span class="socialmedianame">Twitter</span></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i><span class="socialmedianame">Google +</span></a></li>
                </ul>
            </div>
		<?php wp_footer(); ?>

	</body>
</html>
