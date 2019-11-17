<?php
/**
 * Template for displaying quote entries
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <article>

    <?php the_content(); ?>

  </article>

  <?php if ( is_singular() ) get_template_part( "template-parts/footer" ); ?>

</section>