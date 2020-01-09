<?php
/**
 * Template for displaying landing page (home)
 *
 * @package desmo2020
 * @since   1.0.0
 */
?>

<?php get_header(); ?>

<main>
  
  <div class="site-branding">

    <img class="branding-logo" src="<?php echo get_template_directory_uri() . '/assets/images/bp_logo_white.svg'; ?>" />

    <div class="dog">
    
      <span class="dog-line"></span>
    
      <img src="<?php echo get_template_directory_uri() . '/assets/images/dog.svg'; ?>" />
    
      <span class="dog-line"></span>
    
    </div><!-- .dog -->
  
  </div><!-- .site-branding -->

</main>

<?php get_footer(); ?>