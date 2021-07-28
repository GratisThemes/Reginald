<?php
/**
 * Template for displaying the sidebar widget area
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

?>

<?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>

  <aside class="widget-area widget-area-sidebar" role="complementary">
    <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
  </aside>

<?php endif; ?>
