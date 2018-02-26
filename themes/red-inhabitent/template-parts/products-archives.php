<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  <!-- <header class="entry-header"> -->
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="thumbnail">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'large' ); ?>
      </a>
      </div>
    <?php endif; ?>

    <h2 class="entry-title">
      <?php the_title( sprintf( '<a href="%s" rel="bookmark">',
      esc_url( get_permalink() ) ), '</a>' ); ?>

      <span class="price"><?php echo CFS()->get( 'price' ); ?></span>
    </h2>
  <!-- </header> -->
  <!-- .entry-header -->

</article><!-- #post-## -->