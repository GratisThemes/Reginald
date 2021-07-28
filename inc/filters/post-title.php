<?php
/**
 * Adds a title to posts and pages that are missing one.
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

/**
 * Add title for untitled posts
 *
 * @param string $title The title of the post or page.
 *
 * @return string
 **/
function reginald_the_title( $title ) {
  return '' === $title ? esc_html_x( 'Untitled post', 'Added to posts and pages that have missing titles', 'reginald' ) : $title;
}
add_filter( 'the_title', 'reginald_the_title' );
