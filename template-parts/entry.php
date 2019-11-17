<?php
/**
 * Template for displaying content
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( !is_singular() ) get_template_part( "template-parts/header" ); ?>

  <?php if ( !is_singular() ) get_template_part( "template-parts/thumbnail" ); ?>

  <article>

    <?php the_content(); ?>

    <?php
    wp_link_pages( array (
      "before"      => "<div class=\"page-links\">" . __( "Pages:", "desmo2020" ),
      "after"       => "</div>",
      "link_before" => "<span class=\"page-number\">",
      "link_after"  => "</span>",
    ) );
    ?>

  </article>

  <?php if ( is_singular() ) get_template_part( "template-parts/footer" ); ?>

</section>