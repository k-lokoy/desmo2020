  <?php
/**
 * Template for displaying entry header
 *
 * @package desmo2020
 * @since   1.0.0
 * @version 1.0.0
 */
?>
 <header class="entry-header">
      
  <?php
  printf(
    "<h2><a href=\"%2\$s\">%1\$s</a></h2>",
    get_the_title() === "" ? __( "Untitled post", "desmo2020" ) : get_the_title(), 
    esc_url( get_permalink() )
  );
  ?>

  <?php get_template_part( "template-parts/entry-meta" ); ?>

</header>