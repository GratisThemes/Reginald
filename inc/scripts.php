<?php
/**
 * Scripts, styles and fonts
 *
 * @package Reginald
 * @since 1.0.0
 */
function reginald_scripts() {
  
  // Fonts from google
  wp_enqueue_style( 'reginald-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), null);

  // Enqueue Font Awesome (example icon set)
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/icons/font-awesome/css/font-awesome.min.css', array(), '4.6.3');

  // Theme stylesheet
  wp_enqueue_style( 'reginald-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

  // Theme JavaScript
  wp_enqueue_script( 'reginald-script', get_template_directory_uri() . '/assets/js/functions.js', false, wp_get_theme()->get('Version'), true );

  // Comment-reply script
  if ( !is_admin() && is_singular() && comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Custom styles
  $options = [
    '#' . get_background_color(),
    get_theme_mod( 'container_color',  '#FFFFFF' ),
    get_theme_mod( 'text_color',       '#000000' ),
    get_theme_mod( 'link_color',       '#191919' ),
    get_theme_mod( 'site_title_color', '#191919' ),
    get_theme_mod( 'tagline_color',    '#191919' )
  ];

  $css = '
    :root {
      --color-bg:           %1$s;
      --color-container:    %2$s;
      --color-text:         %3$s;
      --color-anchor:       %4$s;
      --color-site-title:   %5$s;
      --color-site-tagline: %6$s;
    }
  ';
  
  wp_add_inline_style( 'reginald-style', vsprintf( $css, $options ) );

}
add_action( 'wp_enqueue_scripts', 'reginald_scripts' );