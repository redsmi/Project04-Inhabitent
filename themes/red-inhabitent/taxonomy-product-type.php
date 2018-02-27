<?php
/**
 * Template Name: Product Type
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<header class="page-header">
			<h1>
			<?php
			// the_archive_title();
			single_term_title();
			?>
			</h1>
			<div class="tax-description">
			<p>
			<?php
			the_archive_description();
			?>
			</p>
			</div>
		</header><!-- .page-header -->

		<div class="shop-grid-items">
			<?php
			// $args3 = array( 
			// 'orderby' => 'title',
			// 'order' => 'ASC'
			// 			);
			// $testing = new WP_Query( $args3 ); // instantiate our object
			?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/products-archives' ); ?>

			<?php endwhile; // End of the loop. ?>

		</div><!-- shop-grid-items -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>