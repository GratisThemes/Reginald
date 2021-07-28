<?php
/**
 * Filters for body_class().
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

/**
 * Add classes to the body depending on customize settings.
 *
 * @param  array $classes Body class names.
 *
 * @return array $classes Body class names.
 */
function reginald_body_class( $classes ) {

  if ( ( is_home() || is_archive() || is_singular() || is_search() ) && is_active_sidebar( 'sidebar-widget-area' ) ) {
    $classes[] = 'has-sidebar';
  }

  if ( get_theme_mod( 'hide_vertical_margin', false ) ) {
    $classes[] = 'hide-vertical-margin';
  }

  return $classes;

}
add_filter( 'body_class', 'reginald_body_class' );
