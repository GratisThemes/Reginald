<?php
/**
 * Template for displaying a widget area and additional content in the footer
 *
 * @package Reginald
 * @since Reginald 1.0
 */
if( !is_active_sidebar( 'footer-widget-area-one' ) &&
	!is_active_sidebar( 'footer-widget-area-two' ) &&
	!is_active_sidebar( 'footer-widget-area-three' ) &&
	!is_active_sidebar( 'footer-widget-area-four' )
){
	return false;
} ?>

<div id="footer-widget-area" role="complementary">

	<?php if( is_active_sidebar( 'footer-widget-area-one' )  ) : ?>
		<div id="footer-widget-area-one" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
		</div><!-- #footer-widget-area-one .sidebar .widget-area -->
	<?php endif; ?>

	<?php if( is_active_sidebar( 'footer-widget-area-two' )  ) : ?>
		<div id="footer-widget-area-two" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
		</div><!-- #footer-widget-area-two .sidebar .widget-area -->
	<?php endif; ?>

	<?php if( is_active_sidebar( 'footer-widget-area-three' )  ) : ?>
		<div id="footer-widget-area-three" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
		</div><!-- #footer-widget-area-three .sidebar .widget-area -->
	<?php endif; ?>

	<?php if( is_active_sidebar( 'footer-widget-area-four' )  ) : ?>
		<div id="footer-widget-area-four" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-four' ); ?>
		</div><!-- #footer-widget-area-four .sidebar .widget-area -->
	<?php endif; ?>

</div><!-- #footer-widget-area -->