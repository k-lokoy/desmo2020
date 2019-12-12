<?php
/**
 * Template for displaying images
 *
 * @package desmo2020
 * @since   1.1.0
 * @version 1.2.0
 */
?>

<?php get_header(); ?>

<main role="main">

  <?php
  while ( have_posts() ) {

    the_post();

    get_template_part( "template-parts/content", "image" );

    if ( comments_open() || get_comments_number() ) comments_template();

  }
  ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>