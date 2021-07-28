<?php
/**
 * Template for displaying a widget area and additional content in the footer
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

if (
  ! is_active_sidebar( 'footer-widget-area-one' ) &&
  ! is_active_sidebar( 'footer-widget-area-two' ) &&
  ! is_active_sidebar( 'footer-widget-area-three' ) &&
  ! is_active_sidebar( 'footer-widget-area-four' )
) {
  return false;
}
?>

<div class="widget-areas-footer" role="complementary">

  <?php if ( is_active_sidebar( 'footer-widget-area-one' ) ) : ?>
    <div class="widget-area widget-area-footer-one" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
    </div><!-- .widget-area-footer-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area-two' ) ) : ?>
    <div class="widget-area widget-area-footer-two" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
    </div><!-- .widget-area-footer-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area-three' ) ) : ?>
    <div class="widget-area widget-area-footer-three" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
    </div><!-- .widget-area-footer-three -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area-four' ) ) : ?>
    <div class="widget-area widget-area-footer-four" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-four' ); ?>
    </div><!-- .widget-area-footer-four -->
  <?php endif; ?>

</div><!-- .widget-areas-footer -->
