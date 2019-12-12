<?php
/**
 * Template for displaying widget areas
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>

<?php
if (
  !is_active_sidebar( "sidebar-one"   ) &&
  !is_active_sidebar( "sidebar-two"   ) &&
  !is_active_sidebar( "sidebar-three" ) 
) {
  return;
}
?>

<div class="widget-areas-wrapper">

  <?php if ( is_active_sidebar( "sidebar-one" ) ): ?>
    <div id="widget-area-one" class="widget-area">
      <?php dynamic_sidebar( "sidebar-one" ); ?>
    </div><!-- #widget-area-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( "sidebar-two" ) ): ?>
    <div id="widget-area-two" class="widget-area">
      <?php dynamic_sidebar( "sidebar-two" ); ?>
    </div><!-- #widget-area-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( "sidebar-three" ) ): ?>
    <div id="widget-area-three" class="widget-area">
      <?php dynamic_sidebar( "sidebar-three" ); ?>
    </div><!-- #widget-area-three -->
  <?php endif; ?>

</div><!-- .widget-areas-wrapper -->