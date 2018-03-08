<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  <!-- <header class="entry-header"> -->
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'large' ); ?>
        </a>
      </div>
    <?php endif; ?>
    
    <div class="item-brief">
      <p><?php the_title(); ?></p>
      <span></span>
      <p class="price"><?php echo CFS()->get( 'price' ); ?></p>
    </div>
  <!-- </header> -->
  <!-- .entry-header -->

</article><!-- #post-## -->