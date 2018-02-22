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
                <h2>Shop Stuff</h2>
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'product-type',
                    'hide_empty' => 0,
                ) );
                if ( ! empty( $terms ) ) :
				?>
                    <div class="product-type-wrapper">
                        <?php foreach ( $terms as $term ) :
                            ?>
                            <div class="product-type">
                                <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg"
                                     alt="<?php echo $term->name; ?>"/>
                                <p><?php echo $term->description; ?></p>
                                <p>
                                    <a href="<?php echo get_term_link( $term ); ?>"
                                      class="product-button"><?php echo $term->name; ?> Stuff</a>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
			</section><!-- shop-feed -->
			
			<section class="journal-feed">
				<h2>Inhabitent Journal</h2>
				<?php
					$args2 = array( 
						'post_type' => 'post', 
						'orderby' => 'date',
						'posts_per_page' => '3' //or numberofposts
								);
					$journal = new WP_Query( $args2 ); // instantiate our object
				?>
				<?php if ( $journal->have_posts() ) : ?>
					<ul class="journal-list"> <!-- don't need to php echo -->

					<?php while ( $journal->have_posts() ) : $journal->the_post(); ?>
						<li>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="thumbnail">
							<?php the_post_thumbnail( 'medium' ); ?>
							</div>
						<?php endif; ?>

						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
						</div><!-- .entry-meta -->

						<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>

						<a href="<?php get_permalink(); ?>" class="read-entry">Read Entry</a>
						</li>
					<?php endwhile; ?>

					</ul>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
      				<h2>Nothing found!</h2>
				<?php endif; ?>
			</section><!-- journal-feed -->
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>



			