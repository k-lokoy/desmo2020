<?php
/**
 * Template for displaying images
 *
 * @package desmo2020
 * @since   1.1.0
 * @version 1.1.0
 */
?>

<?php get_header(); ?>

<main role="main">

  <?php
  while ( have_posts() ) {

    the_post();

    get_template_part( "template-parts/content", "image" );

  }
  ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>