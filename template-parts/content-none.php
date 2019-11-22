<?php
/**
 * Template for displaying no content
 *
 * @package desmo2020
 * @since   1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <article>
    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'desmo2020' ); ?></p>
    
    <?php get_search_form(); ?>
  </article>
</section>