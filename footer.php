<?php
/**
 * Template for displaying the site footer
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
  <footer class="site-footer">

    <?php if ( function_exists( "the_privacy_policy_link" ) ) the_privacy_policy_link(); ?>

    <div class="site-footer-info">
      <?php
        echo get_theme_mod( "footer_text", get_bloginfo( "name" ) );
        if ( get_theme_mod( "footer_copyright", true ) ) echo " &copy; ";
        if ( get_theme_mod( "footer_year",      true ) ) echo date( "Y" );
      ?>
    </div><!-- .site-footer-info -->

    <a href="#" id="scroll-to-top">
      <span class="screen-reader-text"><?php _e( "Scroll to the top", "desmo2020" ); ?></span>
    </a>

  </footer><!-- .site-footer -->
  
  <?php wp_footer(); ?>
  
</body>
</html>