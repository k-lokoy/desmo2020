<?php
/**
 * Template for displaying entry thumbnails
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<?php if ( get_the_post_thumbnail() !== "" ): ?>
  
  <a class="post-thumbnail" href="<?php the_permalink() ?>">
  
    <?php the_post_thumbnail( "desmo2020-featured-image" ); ?>
  
  </a><!-- .post-thumbnail -->

<?php endif; ?>