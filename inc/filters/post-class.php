<?php
/**
 * Filters for post classes.
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

/**
 * Add classes to the body depending on customize settings.
 *
 * @param array $classes Post class names.
 *
 * @return array $classes Post class names.
 */
function reginald_post_class( $classes ) {

  if ( ! get_theme_mod( 'entry_meta_author', true ) ) {
    $classes[] = 'author-hidden';
  }

  return $classes;

}
add_filter( 'post_class', 'reginald_post_class', 10, 3 );
