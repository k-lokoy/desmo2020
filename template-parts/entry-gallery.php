<?php
/**
 * Template for displaying gallery content
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
    $desmo2020_gallery = get_post_gallery();
    
    if ( !is_single() && $desmo2020_gallery ) {   
      
      echo $desmo2020_gallery;
    
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