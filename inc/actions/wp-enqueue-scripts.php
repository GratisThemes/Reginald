<?php
/**
 * The wp_enqueue_scripts hook.
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

/**
 * Enqueue scripts, styles and fonts
 */
function reginald_wp_enqueue_scripts() {

  $theme_version = wp_get_theme()->get( 'Version' );

  // Fonts from google.
  wp_enqueue_style(
    'reginald-fonts',
    'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i',
    false,
    $theme_version
  );

  // Enqueue Font Awesome (icon set).
  wp_enqueue_style(
    'font-awesome',
    get_template_directory_uri() . '/assets/icons/fontawesome-free-5.15.3-web/css/all.min.css',
    false,
    '5.15.3'
  );

  // Theme stylesheet.
  wp_enqueue_style(
    'reginald-style',
    get_stylesheet_uri(),
    false,
    $theme_version
  );

  // Replace the stylesheet with a RTL one if needed.
  wp_style_add_data( 'reginald-style', 'rtl', 'replace' );

  // Theme JavaScript.
  wp_enqueue_script(
    'reginald-script',
    get_template_directory_uri() . '/assets/js/functions.js',
    false,
    $theme_version,
    true
  );

  // Comment-reply script.
  if ( ! is_admin() && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Custom styles.
  $options = array(
    '#' . get_background_color(),
    get_theme_mod( 'container_color', '#FFFFFF' ),
    get_theme_mod( 'text_color', '#000000' ),
    get_theme_mod( 'link_color', '#191919' ),
    get_theme_mod( 'site_title_color', '#191919' ),
    get_theme_mod( 'tagline_color', '#191919' ),
  );

  $css = '
    :root {
      --background-color:           %1$s;
      --background-color-container: %2$s;
      --text-color:                 %3$s;
      --anchor-color:               %4$s;
      --site-title-color:           %5$s;
      --site-tagline-color:         %6$s;
    }
  ';

  wp_add_inline_style( 'reginald-style', vsprintf( $css, $options ) );

}
add_action( 'wp_enqueue_scripts', 'reginald_wp_enqueue_scripts' );
