<?php
/**
 * Template for displaying audio content
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