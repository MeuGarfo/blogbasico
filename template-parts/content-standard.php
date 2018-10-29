<?php
/**
 * Template part for displaying posts
 *
 * @package blogbasico
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail()) {?> 
  <div class="post-media">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail();?></a>
  </div>
  <?php }?>

  <div class="post-content">
    <?php blogbasico_entry_header(); ?>

    <?php blogbasico_entry_content();?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
