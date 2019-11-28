<?php
/**
 * Custom theme functions
 *
 * @package desmo2020
 * @since 1.2.0
 */
/**
  * Social media icons
  *
  * @since 1.2.0
  * @version 1.2.0
  */
$desmo2020_social_icons = array(
  'Twitter'     =>  'fa-twitter',
  'Facebook'    =>  'fa-facebook-f',
  'Instagram'   =>  'fa-instagram',
  'SnapChat'    =>  'fa-snapchat-ghost',
  'LinkedIn'    =>  'fa-linkedin',
  'YouTube'     =>  'fa-youtube',
  'Twitch'      =>  'fa-twitch',
  'Vimeo'       =>  'fa-vimeo',
  'Pinterest'   =>  'fa-pinterest',
  'Flickr'      =>  'fa-flickr',
  'Tumblr'      =>  'fa-tumblr',
  'Spotify'     =>  'fa-spotify',
  'Soundcloud'  =>  'fa-soundcloud',
  'BitCoin'     =>  'fa-btc',
);
/**
 * Formated social media elements
 * 
 * @since 1.2.0
 * @version 1.2.0
 * @return Element [div.desmo2020-social]
 */
function desmo2020_social_links() {
  global $desmo2020_social_icons;
  ?>
  <div class="desmo2020-social">
    <?php if ( get_theme_mod( 'social_media_rss' ) ): ?>
      <a title="<?php esc_attr( bloginfo( 'rss2_url' ) ); ?>" href="<?php esc_url( bloginfo('rss2_url') ); ?>" target="_blank">
        <i class="fas fa-rss"></i>
      </a>
    <?php endif; ?>

    <?php foreach( $desmo2020_social_icons as $service => $icon ): ?>
      <?php if ( get_theme_mod( 'social_media_'.strtolower( $service ) ) ): ?>
        <a title="<?php echo esc_attr( $service ); ?>" href="<?php echo esc_url( get_theme_mod( 'social_media_'.strtolower( $service ) ) ); ?>" target="_blank">
          <i class="fab <?php echo esc_attr( $icon ); ?>"></i>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div><!-- .desmo2020-social -->
<?php } ?>