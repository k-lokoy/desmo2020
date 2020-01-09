<?php
/**
 * Template for displaying audio content
 *
 * @package desmo2020
 * @since   1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( !is_singular() ) : ?>
    <header class="entry-header">  
      <?php
      printf(
        '<h2><a href="%2$s">%1$s</a></h2>',
        get_the_title() === '' ? __( 'Untitled post', 'desmo2020' ) : get_the_title(), 
        esc_url( get_permalink() )
      );
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
    </header>
  <?php endif; ?>

  <article>
    <?php 
    $desmo2020_audio_content = apply_filters( 'the_content', get_the_content() );
    $desmo2020_audio = false;

    // Only get audio from the content if a playlist isn't present.
    if ( false === strpos( $desmo2020_audio_content, 'wp-playlist-script' ) ) {
      $desmo2020_audio = get_media_embedded_in_content( $desmo2020_audio_content, array( 'audio' ) );
    }

    if ( !is_single() && !empty( $desmo2020_audio ) ) {
      
      foreach ( $desmo2020_audio as $desmo2020_audio_html ) {
        echo $desmo2020_audio_html;
      }

    } else {

      
      the_content();

      wp_link_pages( array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'desmo2020' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      ) );
    }
    ?>
  </article>

    <?php if ( is_single() ) : ?>
    <footer class="entry-footer">
      <?php
      $desmo2020_categories_list = get_the_category_list( ', ' );
      if ( $desmo2020_categories_list && !is_archive() ): ?>
        <div class="post-categories">
          <span><?php _e( 'Categories:', 'desmo2020' ); ?></span>
          <?php echo $desmo2020_categories_list; ?>
        </div><!-- .post-categories -->
      <?php endif; ?>

      <?php
      $desmo2020_tags_list = get_the_tag_list();
      if ( $desmo2020_tags_list ) : ?>
        <div class="post-tags">
          <span><?php _e( 'Tags:', 'desmo2020' ); ?></span>
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