<?php
/**
 * Scripts, styles and fonts
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.2.0 [Changed default anchor color]
 * @version 1.2.2 [Changed anchor color setting to color scheme setting]
 * @version 1.2.2 [Added version parameter to stylesheet]
 * @version 1.2.2 [Added custom variables to block editor]
 */
function desmo2020_scripts() {

  // Theme stylesheet
  wp_enqueue_style( 'desmo2020-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

  // Fonts from google
  wp_enqueue_style(
    'desmo2020-fonts', 
    'https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,500i,700',
    array(),
    null
  );

  // Font Awesome
  wp_enqueue_style(
    'font-awesome',
    get_template_directory_uri() . '/assets/icons/font-awesome/css/all.min.css',
    array(),
    '5.11.2'
  );

  // Theme JavaScript
  wp_enqueue_script( 'desmo2020-script', get_template_directory_uri() . '/assets/js/functions.js', false, wp_get_theme()->get('Version'), true );

  // Comment-reply script
  if ( !is_admin() && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Custom styles
  $options = [
    '#' . get_background_color(),
    get_theme_mod( 'color_bg_2',   '#222222' ),
    get_theme_mod( 'color_text',   '#222222' ),
    get_theme_mod( 'color_text_2', '#F4EDE7' ),
    get_theme_mod( 'color_scheme', '#A87D34' ),
    get_theme_mod( 'color_border', '#222222' ),
  ];

  $css = '
    :root {
      --color-bg:     %1$s;
      --color-bg-2:   %2$s;
      --color-txt:    %3$s;
      --color-txt-2:  %4$s;
      --color-scheme: %5$s;
      --color-border: %6$s;
    }
  ';
  
  wp_add_inline_style( 'desmo2020-style', vsprintf( $css, $options ) ); 
}
add_action( 'wp_enqueue_scripts', 'desmo2020_scripts' );

/** 
 * Block editor styles
 *
 * @package desmo2020
 * @since   1.2.2
 */
function desmo2020_block_editor_style() {
  wp_enqueue_style( 'desmo2020_block_editor_style', get_theme_file_uri( '/block-editor-style.css' ), false, wp_get_theme()->get('Version'), 'all' );

  // Custom options
  $options = [
    get_theme_mod( 'color_scheme', '#A87D34' ),
    get_theme_mod( 'color_border', '#222222' ),
  ];

  $css = '
    .editor-styles-wrapper {
      --color-scheme: %1$s !important;
      --color-border: %2$s !important;
    }
  ';
  
  wp_add_inline_style( 'desmo2020_block_editor_style', vsprintf( $css, $options ) );

}
add_action( 'enqueue_block_editor_assets', 'desmo2020_block_editor_style' );