<?php
/**
 * Widget areas
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

/**
 * The widgets_init action
 */
function reginald_widgets_init() {

  register_sidebar(
    array(
      'name'          => __( 'Header Widget Area', 'reginald' ),
      'id'            => 'header-widget-area',
      'description'   => __( 'Widget area above the content', 'reginald' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Sidebar Widget Area', 'reginald' ),
      'id'            => 'sidebar-widget-area',
      'description'   => __( 'Widget area at the side of the content', 'reginald' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (Left)', 'reginald' ),
      'id'            => 'footer-widget-area-one',
      'description'   => __( 'Widget area in the footer', 'reginald' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (Left Center)', 'reginald' ),
      'id'            => 'footer-widget-area-two',
      'description'   => __( 'Widget area in the footer', 'reginald' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (Right Center)', 'reginald' ),
      'id'            => 'footer-widget-area-three',
      'description'   => __( 'Widget area in the footer', 'reginald' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (Right)', 'reginald' ),
      'id'            => 'footer-widget-area-four',
      'description'   => __( 'Widget area in the footer', 'reginald' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
    )
  );

}
add_action( 'widgets_init', 'reginald_widgets_init' );
