<?php
/**
 * Scripts, styles and fonts
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
function desmo2020_scripts() {

  // Theme stylesheet
  wp_enqueue_style( "desmo2020-style", get_stylesheet_uri() );

  // Fonts from google
  wp_enqueue_style(
    "desmo2020-fonts", 
    "https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i",
    array(),
    null
  );

  // Font Awesome
  wp_enqueue_style(
    "font-awesome",
    get_template_directory_uri() . "/assets/icons/font-awesome/css/all.min.css",
    array(),
    "5.11.2"
  );

  // Theme JavaScript
  wp_enqueue_script( "desmo2020-script", get_template_directory_uri() . "/assets/js/functions.js", false, wp_get_theme()->get("Version"), true );

  // Comment-reply script
  if ( !is_admin() && is_singular() && comments_open() && get_option("thread_comments") ) {
    wp_enqueue_script( "comment-reply" );
  }

  // Custom styles
  $options = [
    "#" . get_background_color(),
    get_theme_mod( "color_bg_2",   "#222222" ),
    get_theme_mod( "color_text",   "#222222" ),
    get_theme_mod( "color_text_2", "#F4EDE7" ),
    get_theme_mod( "color_anchor", "#0DAD7A" ),
    get_theme_mod( "color_border", "#222222" ),
  ];

  $css = "
    :root {
      --color-bg:     %1\$s;
      --color-bg-2:   %2\$s;
      --color-txt:    %3\$s;
      --color-txt-2:  %4\$s;
      --color-anchor: %5\$s;
      --color-border: %6\$s;
    }
  ";
  
  wp_add_inline_style( "desmo2020-style", vsprintf( $css, $options ) );

}
add_action( "wp_enqueue_scripts", "desmo2020_scripts" );