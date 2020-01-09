<?php
/**
 * Widget areas
 *
 * @package desmo2020
 * @since  1.0.0
 */

function desmo2020_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Sidebar one', 'desmo2020' ),
    'id'            => 'sidebar-one',
    'description'   => __( 'Widget area one', 'desmo2020' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Sidebar two', 'desmo2020' ),
    'id'            => 'sidebar-two',
    'description'   => __( 'Widget area two', 'desmo2020' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Sidebar three', 'desmo2020' ),
    'id'            => 'sidebar-three',
    'description'   => __( 'Widget area three', 'desmo2020' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'desmo2020_widgets_init' );