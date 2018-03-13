<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="home-banner">
				<img src="<?php echo get_template_directory_uri()?>/images/inhabitent-logo-full.svg" alt="Inhabitent logo"/>
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
						
						<div class="info-preview">
							<div class="entry-meta">
							<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							</div><!-- .entry-meta -->

							<a href="<?php echo esc_url(get_permalink()); ?>">			
							<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
							</a>		

							<a href="<?php esc_url(the_permalink()); ?>" class="read-entry">Read Entry</a>
						</div><!-- info-preview -->		
						</li>
					<?php endwhile; ?>
					</ul>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
      				<h2>Nothing found!</h2>
				<?php endif; ?>
			</section><!-- journal-feed -->

			<section class="adventure-feed">
				<h2>Latest Adventures</h2>
				<div class="adventure-list">
					<?php
						$args3 = array(
							'post_type' => 'adventures',
							'order' => 'ASC',
							'posts_per_page' => 4
								);
						$adventures = get_posts( $args3 );
					?>
   					<?php foreach ( $adventures as $post ) : setup_postdata( $post ); ?>
    					<div class="adventure-grid-item">
      						<?php the_post_thumbnail( 'large' );  ?>
      						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="<?php esc_url(the_permalink()); ?>" class="read-entry">Read More</a>
    					</div><!-- .adventure-grid-item -->
    				<?php endforeach; wp_reset_postdata(); ?>
				</div><!-- .adventures-listhome-adventures -->

				<p class="more-adventures">
					<a href="<?php echo esc_url( home_url('/adventures') ); ?>" class="adventure-button">More Adventures</a>
				</p>
			</section><!-- adventure-feed -->
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>



			