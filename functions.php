<?php
/**
 * Theme functions and definitions
 *
 * @package desmo2020
 */


if ( !function_exists( "desmo2020_setup" ) ) {

  /**
   * Set up theme defaults and registers support for various WordPress features
   *
   * @since   1.0.0
   * @version 1.0.0
   */
  function desmo2020_setup() {

    // Support for translation files
    // https://codex.wordpress.org/Function_Reference/load_theme_textdomain
    load_theme_textdomain( "desmo2020", get_template_directory() . "/languages" );

    // Main content width
    // https://codex.wordpress.org/Content_Width
    if ( ! isset( $content_width ) ) $content_width = 1140;

    /* 
     * Register support for various WordPress features
     */
    
    // https://codex.wordpress.org/Automatic_Feed_Links
    add_theme_support( "automatic-feed-links" );
    
    // https://codex.wordpress.org/Title_Tag
    add_theme_support( "title-tag" );

    // https://codex.wordpress.org/Theme_Logo
    add_theme_support( "custom-logo", array (
      "height"      => 100,
      "width"       => 400,
      "flex-height" => true,
      "flex-width"  => true,
      "header-text" => array ( "site-title", "site-tagline" )
    ) );

    // https://codex.wordpress.org/Post_Thumbnails
    add_theme_support( "post-thumbnails" );
    set_post_thumbnail_size( 1140, 642 );

    // https://codex.wordpress.org/Custom_Backgrounds
    add_theme_support( "custom-background", array (
      "default-color" => "FFFFFF",
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( "customize-selective-refresh-widgets" );

    // Add support for Block Styles.
    add_theme_support( "wp-block-styles" );

    // Add support for full and wide align images.
    add_theme_support( "align-wide" );

    // Add support for responsive embedded content.
    add_theme_support( "responsive-embeds" );

    // https://codex.wordpress.org/Theme_Markup
    add_theme_support( "html5", array (
      "search-form", 
      "comment-form",
      "comment-list",
      "gallery", 
      "caption"
    ) );

    // https://codex.wordpress.org/Post_Formats
    add_theme_support( "post-formats", array (
      "aside",
      "gallery",
      "link",
      "quote",
      "status",
      "video",
      "audio",
      "chat",
    ) );

    // Editor styles for TinyMCE and Gutenberg
    add_theme_support( "editor-styles" );
    add_editor_style( "editor-style.css" );

    //https://developer.wordpress.org/reference/functions/add_image_size/
    add_image_size( "desmo2020-featured-image", 1140, 642, false );
    add_image_size( "desmo2020-full-width",     1140 );

    // Navigation
    register_nav_menus( array (
      "header" => __( "Header", "desmo2020" )
    ) );

  }

  add_action( "after_setup_theme", "desmo2020_setup" );

}

// Scripts and styles
require_once get_template_directory() . "/inc/scripts.php";

// Widgets areas
require_once get_template_directory() . "/inc/widget-areas.php";

// Filters
require_once get_template_directory() . "/inc/filters.php";

// WP Customizer settings
require_once get_template_directory() . "/inc/customizer.php";