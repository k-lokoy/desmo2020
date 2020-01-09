<?php
/**
 * Various changes to wordpress functions
 *
 * @package desmo2020
 */

/**
 * Add classes to the body depending on customize settings
 *
 * @since   1.0.0
 */
function desmo2020_body_class( $classes ) {

  if ( is_singular() && get_the_post_thumbnail() !== '' ) {
    $classes[]  = 'has-featured-image';
  }

  return $classes;

}
add_filter( 'body_class', 'desmo2020_body_class' );

?>