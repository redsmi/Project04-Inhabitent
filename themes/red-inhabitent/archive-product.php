<?php
/**
 * Template Name: Archive-Products
 */
/**
 * The template for displaying product archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class="page-header">
			<h1>Shop Stuff</h1>
		<ul class="product-types-list">
			<?php
			$terms = get_terms ( array(
				'taxonomy' => 'product-type',
				'hide_empty' => 0,
			));
			if ( ! empty ($terms) ):
			?>
				<?php foreach ( $terms as $term ):?>
				<li class="product-type">
					<p>
						<a href="<?php echo get_term_link( $term ); ?>"
						class="btn"><?php echo $term->name; ?></a>
					</p>
				</li>
			<?php endforeach; ?>
			<?php endif; ?>
		</ul>
		</header><!-- .page-header -->

        <?php if ( have_posts() ) : ?>

			<!-- moved header -->

            <?php /* Start the Loop */ ?>
            <div class="products-wrapper">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/products-archives', 'none' ); ?>


            <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>