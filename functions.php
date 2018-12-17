<?php
/**
 * Theme functions and definitions
 *
 * @package Reginald
 */

if ( !function_exists( 'reginald_setup' ) ) {
  /**
   * Set up theme defaults and registers support for various WordPress features
   *
   * @since  1.0.0
   */
  function reginald_setup() {
    // Support for translation files
    // https://codex.wordpress.org/Function_Reference/load_theme_textdomain
    load_theme_textdomain( 'reginald', get_template_directory() . '/languages' );

    // Main content width
    // https://codex.wordpress.org/Content_Width
    if ( ! isset( $content_width ) ) $content_width = 900;

    /* 
     * Register support for various WordPress features
     */
    
    // https://codex.wordpress.org/Automatic_Feed_Links
    add_theme_support( 'automatic-feed-links' );
    
    // https://codex.wordpress.org/Title_Tag
    add_theme_support( 'title-tag' );
    
    // https://codex.wordpress.org/Theme_Logo
    add_theme_support( 'custom-logo' );

    // https://codex.wordpress.org/Post_Thumbnails
    add_theme_support( 'post-thumbnails' );

    // https://codex.wordpress.org/Custom_Backgrounds
    add_theme_support( 'custom-background', array(
      'default-color'          => '1E73BE',
      'default-image'          => '',
    ) );

    // https://codex.wordpress.org/Theme_Markup
    add_theme_support( 'html5', array(
      'search-form', 
      'comment-form',
      'comment-list',
      'gallery', 
      'caption'
    ) );

    // https://codex.wordpress.org/Post_Formats
    add_theme_support( 'post-formats', array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat',
    ) );

    // https://codex.wordpress.org/Custom_Headers
    add_theme_support( 'custom-header', array(
      'default-image'      => '',
      'random-default'     => false,
      'width'              => 900,
      'height'             => 300,
      'flex-height'        => true,
      'flex-width'         => true,
      'header-text'        => false,
      'uploads'            => true,
    ) );

    // Editor styles for TinyMCE and Gutenberg
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );
    
    //https://developer.wordpress.org/reference/functions/add_image_size/
    add_image_size( 'reginald-featured-image', 900, 300, true );

    // Navigation
    register_nav_menus( array(
      'header' => __( 'Header', 'reginald' ),
      'footer' => __( 'Footer', 'reginald' ),
    ) );

  }
  add_action( 'after_setup_theme', 'reginald_setup' );

}

// Scripts and styles
require_once get_template_directory() . '/inc/scripts.php';

// Widgets areas
require_once get_template_directory() . '/inc/widget-areas.php';

// Filters
require_once get_template_directory() . '/inc/filters.php';

// Theme functions
require_once get_template_directory() . '/inc/theme-functions.php';

// WP Customizer settings
require_once get_template_directory() . '/inc/customizer.php';