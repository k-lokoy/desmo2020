<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<main role="main">
  <section class="error-404 not-found">
    <article>
      <h1><?php _e( '404 Not Found', 'desmo2020' ); ?></h1>

      <p>
        <?php _e( 'Oops! That page can&rsquo;t be found.', 'desmo2020' ); ?>
        <br />
        <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'desmo2020' ); ?>
      </p>
      <?php get_search_form(); ?>
    </article>
  </section><!-- .error-404 -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>