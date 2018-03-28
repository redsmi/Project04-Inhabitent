<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header><!-- .page-header -->

		<div class="adventures-grid-items">
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="thumbnail">
							<?php the_post_thumbnail( 'large' ); ?>
							</div>
						<?php endif; ?>

						<div class="adventure-info-container">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

							<div class="entry-content">
								<a href="<?php esc_url(the_permalink()); ?>" class="read-entry">Read More →</a>
							</div>
						</div><!-- .adventure-info-container -->
					</article><!-- #post-## -->
					
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- adventures-grid-items -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
