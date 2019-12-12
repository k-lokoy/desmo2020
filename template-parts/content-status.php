<?php
/**
 * Template for displaying status content
 *
 * @package desmo2020
 * @since   1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( !is_singular() ) : ?>
    <header class="entry-header">  
      <div class="entry-meta">
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
    </header>
  <?php endif; ?>

  <article>
    <?php the_content(); ?>

    <?php
    if ( is_single() ) {
      wp_link_pages( array (
        "before"      => "<div class=\"page-links\">" . __( "Pages:", "desmo2020" ),
        "after"       => "</div>",
        "link_before" => "<span class=\"page-number\">",
        "link_after"  => "</span>",
      ) );
    }
    ?>
  </article>

  <?php if ( is_single() ): ?>
    <footer class="entry-footer">
      <?php
      $desmo2020_categories_list = get_the_category_list( ', ' );
      if ( $desmo2020_categories_list && !is_archive() ): ?>
        <div class="post-categories">
          <span><?php _e( "Categories:", "desmo2020" ); ?></span>
          <?php echo $desmo2020_categories_list; ?>
        </div><!-- .post-categories -->
      <?php endif; ?>

      <?php
      $desmo2020_tags_list = get_the_tag_list();
      if ( $desmo2020_tags_list ) : ?>
        <div class="post-tags">
          <span><?php _e( "Tags:", "desmo2020" ); ?></span>
          <?php echo $desmo2020_tags_list; ?>
        </div><!-- .post-tags -->
      <?php endif; ?>
      
      <?php
      if ( is_single() ) {
        the_post_navigation( array(
          'prev_text' => 
            '<span class="screen-reader-text">' . 
            __( 'Previous post', 'desmo2020' )  . '</span>
             <span>' . 
             __( 'Previous', 'desmo2020' ) . 
             '</span><span>%title</span>',
          'next_text' => 
            '<span class="screen-reader-text">' . 
            __( 'Next post', 'desmo2020' ) . 
            '</span><span>' . 
            __( 'Next', 'desmo2020' ) . '</span>
            <span>%title</span>',
        ) );
      }
      ?>
    </footer>
  <?php endif; ?>
</section>