<?php
/**
 * Theme customizer file
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */

function desmo2020_customize_register( $wp_customize ) {

  // Secondary background color
  $wp_customize->add_setting( "color_bg_2", array (
    "default"           => "#222222",
    "sanitize_callback" => "sanitize_hex_color"
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "color_bg_2", array (
    "label"   => __( "Secondary background color", "desmo2020" ),
    "section" => "colors",
  ) ) );

  // Text color
  $wp_customize->add_setting( "color_text", array (
    "default"           => "#222222",
    "sanitize_callback" => "sanitize_hex_color"
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "color_text", array (
    "label"   => __( "Text color", "desmo2020" ),
    "section" => "colors",
  ) ) );

  // Secondary text color
  $wp_customize->add_setting( "color_text_2", array (
    "default"           => "#F4EDE7",
    "sanitize_callback" => "sanitize_hex_color"
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "color_text_2", array (
    "label"   => __( "Secondary text color", "desmo2020" ),
    "section" => "colors",
  ) ) );

  // Link color
  $wp_customize->add_setting( "color_anchor", array (
    "default"           => "#0DAD7A",
    "sanitize_callback" => "sanitize_hex_color"
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "color_anchor", array (
    "label"   => __( "Links", "desmo2020" ),
    "section" => "colors",
  ) ) );

  // border color
  $wp_customize->add_setting( "color_border", array (
    "default"           => "#222222",
    "sanitize_callback" => "sanitize_hex_color"
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "color_border", array (
    "label"   => __( "Borders", "desmo2020" ),
    "section" => "colors",
  ) ) );

  // Theme options
  $wp_customize->add_section( "top_bar" , array (
    "title"      => __( "Top bar", "desmo2020" ),
    "priority"   => 80,
  ) );

  // Phone number
  $wp_customize->add_setting( "phone", array (
    "default" => "",
    "sanitize_callback" => "sanitize_text_field"
  ) );
  
  $wp_customize->add_control( "phone", array (
    "label"     => __("Phone number", "desmo2020"),
    "section"   => "top_bar",
    "type"      => "text",
  ) );

  // E-mail
  $wp_customize->add_setting( "email", array (
    "default" => "",
    "sanitize_callback" => "sanitize_text_field"
  ) );
  
  $wp_customize->add_control( "email", array (
    "label"     => __("E-mail", "desmo2020"),
    "section"   => "top_bar",
    "type"      => "text",
  ) );

  // Footer 
  $wp_customize->add_section( "footer" , array (
    "title"    => __( "Footer", "desmo2020" ),
    "priority" => 110,
  ) );

  // Footer: copyright text
  $wp_customize->add_setting( "footer_text", array (
    "default"           => get_bloginfo( "name" ),
    "sanitize_callback" => "sanitize_text_field"
  ) );

  $wp_customize->add_control( "footer_text", array (
    "label"     => __( "Footer text", "desmo2020" ),
    "section"   => "footer",
    "type"      => "text",
  ) );

  // Footer: copyright icon
  $wp_customize->add_setting( "footer_copyright", array (
    "default"           => true,
    "sanitize_callback" => "desmo2020_sanitize_checkbox"
  ) );

  $wp_customize->add_control( "footer_copyright", array (
    "label"     => __( "Display Copyright icon", "desmo2020" ),
    "section"   => "footer",
    "type"      => "checkbox",
  ) );

  // Footer: copyright year
  $wp_customize->add_setting( "footer_year", array (
    "default"           => true,
    "sanitize_callback" => "desmo2020_sanitize_checkbox"
  ) );

  $wp_customize->add_control( "footer_year", array (
    "label"     => __( "Display current year", "desmo2020" ),
    "section"   => "footer",
    "type"      => "checkbox",
  ) );

}

add_action( "customize_register", "desmo2020_customize_register" );

function desmo2020_sanitize_select( $input, $setting ) {
  // Ensure input is a slug
  $input = sanitize_key( $input );

  // Get list of choices from the control associated with the setting
  $choices = $setting->manager->get_control( $setting->id )->choices;

  // If the input is a valid key, return it; otherwise, return the default
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function desmo2020_sanitize_checkbox( $input ) {
  // Boolean check 
  return ( ( isset( $input ) && true == $input ) ? true : false );
}

?>