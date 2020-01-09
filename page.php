<?php
/**
 * Template for displaying pages
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.1.0 [Improved content layouts]
 */
?>

<?php get_header(); ?>

<main role="main">
  
  <?php while ( have_posts() ): the_post(); ?>
    
    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
    
  <?php endwhile; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>