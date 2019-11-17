<?php
/**
 * Template for displaying entry meader meta links
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<div class="entry-meta">
  <?php
  if ( !is_page() ) {
    printf(
      '<span><a href="%1$s">%2$s</a></span>',
      esc_url( get_permalink() ),
      get_the_date()
    );
  }
  ?>

  <?php
  edit_post_link(
    sprintf(
      '%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
      __( 'Edit', 'desmo2020' ),
      get_the_title()
    )
  );
  ?>
</div>