<?php
/**
 * Template for displaying excerpts
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

    <?php the_excerpt(); ?>

  </article>

  <?php if ( is_singular() ) get_template_part( "template-parts/footer" ); ?>

</section>