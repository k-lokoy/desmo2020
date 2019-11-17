<?php
/**
 * Template for displaying video content
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( !is_singular() ) get_template_part( "template-parts/header" ); ?>

  <article>

    <?php 
    $desmo2020_video_content = apply_filters( 'the_content', get_the_content() );
    $desmo2020_video = false;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $desmo2020_video_content, 'wp-playlist-script' ) ) {
      $desmo2020_video = get_media_embedded_in_content( $desmo2020_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }
    
    if ( !is_single() && !empty( $desmo2020_video ) ) {
      
      foreach ( $desmo2020_video as $desmo2020_video_html ) {
        echo $desmo2020_video_html;
      }

    } else {
      
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'desmo2020' ),
        'after' => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
      ) );
    }
    ?>

  </article>

  <?php if ( is_singular() ) get_template_part( "template-parts/footer" ); ?>

</section>