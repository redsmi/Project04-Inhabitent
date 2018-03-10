<?php
/**
 * 
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="adventure-banner">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full' ); ?>
					<?php endif; ?>
				</header>

				<div class="entry-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          			<h2>By <?php the_author(); ?></h2>
					<?php the_content(); ?>

					<div class="social-media">
						<button type="button"><i class="fab fa-facebook-f"></i>Like</button>
						<button type="button"><i class="fab fa-twitter"></i>Tweet</button>
						<button type="button"><i class="fab fa-pinterest"></i>Pin</button>
					</div>
				</div><!-- entry-content -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>