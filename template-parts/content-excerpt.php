<?php
/**
 * Template for displaying excerpts
 *
 * @package desmo2020
 * @since   1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">  
    <?php
    printf(
      "<h2><a href=\"%2\$s\">%1\$s</a></h2>",
      get_the_title() === "" ? __( "Untitled post", "desmo2020" ) : get_the_title(), 
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

  <?php if ( get_the_post_thumbnail() !== "" ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( "desmo2020-featured-image" ); ?>
    </a><!-- .post-thumbnail -->
  <?php endif; ?>

  <article>
    <?php the_excerpt(); ?>
  </article>
</section>