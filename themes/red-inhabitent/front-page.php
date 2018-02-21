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

			<?php endwhile; // End of the loop that prints Home page content ?>

			<section class="home-banner">
			</section><!-- home-banner -->
			<section class="shop-feed">
				<h2>...Shop Stuff...</h2>
				<?php
					$args1 = array( 
						'post_type' => 'post', 
						'order' => 'ASC',
						'posts_per_page' => '1'
								);
					$products = new WP_Query( $args1 ); // instantiate our object
				?>
				<?php if ( $products->have_posts() ) : ?>
					<?php while ( $products->have_posts() ) : $products->the_post(); ?>
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
      				<h2>Nothing found!</h2>
				<?php endif; ?>
			</section><!-- shop-feed -->
			
			<section class-"journal-feed">
				<h2>...Inhabitent Journal...</h2>
				<?php
					$args2 = array( 
						'post_type' => 'post', 
						'orderby' => 'date',
						'posts_per_page' => '3'
								);
					$journal = new WP_Query( $args2 ); // instantiate our object
				?>
				<?php if ( $journal->have_posts() ) : ?>
					<?php echo '<ul class="journal-list">';?>

					<?php while ( $journal->have_posts() ) : $journal->the_post(); ?>
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>

						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
						</div><!-- .entry-meta -->
					<?php endwhile; ?>

					<?php echo '</ul>';?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
      				<h2>Nothing found!</h2>
				<?php endif; ?>
			</section><!-- journal-feed -->
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
