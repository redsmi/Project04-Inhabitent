<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="product-image">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div><!-- product-image -->
				<div class="product-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="entry-content">
						<p class="price"><?php echo CFS() -> get ('price'); ?></p>
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<div class="social-media">
						<button type="button"><i class="fab fa-facebook-f"></i>Like</button>
						<button type="button"><i class="fab fa-twitter"></i>Tweet</button>
						<button type="button"><i class="fab fa-pinterest"></i>Pin</button>
					</div>
				</div><!-- product-content -->
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
