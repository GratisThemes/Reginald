<?php
/**
 * Template for displaying a widget area in the header
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'header-widget-area' ) ): ?>

  <div id="widget-area-header" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'header-widget-area' ); ?>

  </div>

<?php endif; ?>