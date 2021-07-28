<?php
/**
 * Filters for get_the_archive_title()
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

/**
 * Remove prefix from archive titles
 *
 * @param string $title Archive title with prefix.
 *
 * @return string $title Archive title without prefix.
 */
function reginald_get_the_archive_title( $title ) {
  if ( is_category() ) {
    $title = '<i class="far fa-folder"></i>' . single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = '<i class="fas fa-tag"></i>' . single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = '<i class="far fa-user"></i><span class="vcard">' . get_the_author() . '</span>';
  } elseif ( is_year() ) {
    $title = '<i class="far fa-calendar-alt"></i>' . get_the_date( _x( 'Y', 'yearly archives date format', 'reginald' ) );
  } elseif ( is_month() ) {
    $title = '<i class="far fa-calendar-alt"></i>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'reginald' ) );
  } elseif ( is_day() ) {
    $title = '<i class="far fa-calendar-alt"></i>' . get_the_date( _x( 'F j, Y', 'daily archives date format', 'reginald' ) );
  } elseif ( is_post_type_archive() ) {
    $title = post_type_archive_title( '', false );
  }

  return $title;
}
add_filter( 'get_the_archive_title', 'reginald_get_the_archive_title' );
