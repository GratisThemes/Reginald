<?php
/**
 * Template for displaying the search form
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
    <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'reginald' ); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'reginald' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'reginald' ); ?>" />
  </label>
  <button type="submit" class="search-submit"><i class="fa fa-search"></i><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'reginald' ); ?></span></button>
</form>
