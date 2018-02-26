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
    <?php the_title(); ?>

    <span class="price"><?php echo CFS()->get( 'price' ); ?></span>
    </h2>
  <!-- </header> -->
  <!-- .entry-header -->

</article><!-- #post-## -->