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
  */
$desmo2020_social_icons = array(
  'Amazon'        =>  'fa-amazon',
  'Behance'       =>  'fa-behance',
  'BitBucket'     =>  'fa-bitbucket',
  'Bitcoin'       =>  'fa-bitcoin',
  'Discord'       =>  'fa-discord',
  'Etsy'          =>  'fa-etsy',
  'Facebook'      =>  'fa-facebook',
  'Flickr'        =>  'fa-flickr',
  'GitHub'        =>  'fa-github',
  'Google+'       =>  'fa-google-plus',
  'Instagram'     =>  'fa-instagram',
  'LastFM'        =>  'fa-lastfm',
  'LinkedIn'      =>  'fa-linkedin',
  'MixCloud'      =>  'fa-mixcloud',
  'Pinterest'     =>  'fa-pinterest',
  'PlayStation'   =>  'fa-playstation',
  'Reddit'        =>  'fa-reddit-alien',
  'SnapChat'      =>  'fa-snapchat-ghost',
  'Soundcloud'    =>  'fa-soundcloud',
  'Spotify'       =>  'fa-spotify',
  'Steam'         =>  'fa-steam',
  'Teamspeak'     =>  'fa-teamspeak',
  'Tumblr'        =>  'fa-tumblr',
  'Twitch'        =>  'fa-twitch',
  'Twitter'       =>  'fa-twitter',
  'Vimeo'         =>  'fa-vimeo',
  'Vine'          =>  'fa-vine',
  'Xbox'          =>  'fa-xbox',
  'YouTube'       =>  'fa-youtube'
);
/**
 * Formated social media elements
 * 
 * @since 1.2.0
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