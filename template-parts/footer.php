  <?php
/**
 * Template for displaying entry footers
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<footer class="entry-footer">

  <?php
  $desmo2020_categories_list = get_the_category_list( ', ' );
  if ( $desmo2020_categories_list && !is_archive() ): ?>
    <div class="post-categories">
      <span>Categories:</span>
      <?php echo $desmo2020_categories_list; ?>
    </div><!-- .post-categories -->
  <?php endif; ?>

  <?php
  $desmo2020_tags_list = get_the_tag_list();
  if ( $desmo2020_tags_list ) : ?>
    <div class="post-tags">
      <span>Tags:</span>
      <?php echo $desmo2020_tags_list; ?>
    </div><!-- .post-tags -->
  <?php endif; ?>
  
  <?php
  if ( is_single() ) {
    the_post_navigation( array(
      'prev_text' => 
        '<span class="screen-reader-text">' . 
        __( 'Previous post', 'desmo2020' )  . 
        '</span>
         <span>' . __( 'Previous', 'desmo2020' ) . '</span>
         <span>%title</span>',
      'next_text' => 
        '<span class="screen-reader-text">' . __( 'Next post', 'desmo2020' ) . '</span>
         <span>' . __( 'Next', 'desmo2020' ) . '</span>
         <span>%title</span>',
    ) );
  }
  ?>

</footer>