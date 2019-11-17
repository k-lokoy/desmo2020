<?php
/**
 * The template for displaying the head
 * Displays all of the head element and everything up until the content.
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( "charset" ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  
  <?php if ( is_singular() && pings_open() ) : ?>
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>">
  <?php endif;?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="site-header-wrapper">
    
    <header class="top-bar">
      
      <ul class="top-bar-languages">
        <?php
        pll_the_languages( array ( 
          "show_flags" => true,
          "show_names" => false
        ) );
        ?>
      </ul><!-- .top-bar-languages -->

      <div class="top-bar-links">
        <?php if ( get_theme_mod( "phone" ) ): ?>
          <div class="desmo2020-phone">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:<?php echo esc_attr( get_theme_mod( "phone" ) ); ?>">
              <?php echo esc_html( get_theme_mod( "phone" ) ); ?>
            </a>
          </div>
        <?php endif; ?>

        <?php if ( get_theme_mod( "email" ) ) : ?>
          <div class="desmo2020-email">
            <i class="fas fa-envelope"></i>
            <a href="mailto:<?php echo esc_attr( get_theme_mod( "email" ) ); ?>" target="_top">
              <?php echo esc_html( get_theme_mod('email') ); ?>
            </a>
          </div>
        <?php endif; ?>
      </div><!-- .top-bar-links -->

    </header><!-- .top-bar -->

    <header class="site-header">
      
      <?php if ( has_nav_menu( "header" ) ) : ?>
        <div class="site-header-nav-container">
      
          <input type="checkbox" id="site-header-nav-toggle" />

          <label for="site-header-nav-toggle" id="site-header-nav-toggle-label">
            <span></span>
            <span class="screen-reader-text"><?php _e( "Toggle menu", "desmo2020" ); ?></span>
          </label><!-- #header-nav-toggle-label -->

          <?php
          wp_nav_menu( array (
            "theme_location" => "header",
            "menu_id"        => "site-header-nav",
            "container"      => false
          ) );
          ?>
    
        </div><!-- .site-header-nav-container -->
      <?php endif; ?>

      <?php if( !is_home() ) : ?>
        <div class="site-identity">
      
          <a class="site-title" href="<?php echo esc_url( home_url( "/" ) ); ?>" title="<?php bloginfo( "name" ) ?>"><?php bloginfo( "name" ); ?></a><!-- .site-title -->

          <?php if ( function_exists( "the_custom_logo" ) ) the_custom_logo(); ?>

          <span class="site-tagline"><?php bloginfo( "description" ); ?></span><!-- .site-tagline -->
      
        </div><!-- .site-identity -->
      <?php endif; ?>

    </header><!-- .site-header -->

    <div class="site-featured-wrapper">

      <?php if ( is_singular() ): ?>

        <?php
        if ( is_singular() && get_the_post_thumbnail() !== "" ) {
          the_post_thumbnail( "desmo2020-featured-image" );
        }
        ?>
    
        <header class="site-featured-entry-header entry-header">
          <?php
          the_post();
          
          printf(
            "<h1 class=>%s</h1>",
            get_the_title() === "" ? __( "Untitled post", "desmo2020" ) : get_the_title()
          );

          get_template_part( "template-parts/entry-meta" );
          
          rewind_posts();
          ?>
        </header><!-- .entry-header -->
      
      <?php endif; ?>
    
    </div>

  </div><!-- .site-header-wrapper -->