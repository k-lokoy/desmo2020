<?php
/**
 * Template for displaying page content
 *
 * @package desmo2020
 * @since   1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
</section>