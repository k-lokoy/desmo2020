<?php
/**
 * Template for displaying single post entry
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.1.0 [Improved content layouts]
 */
?>

<?php get_header(); ?>

<main role="main">

  <?php
  while ( have_posts() ) {

    the_post(); 
  
    get_template_part( 'template-parts/content', get_post_format() );

    if ( comments_open() || get_comments_number() ) comments_template();
  
  }
  ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>