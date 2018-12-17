<?php
/**
  * Theme customizer file
  *
  * @package Reginald
  * @since 1.0.0
  * @version 1.3.0 [Removed breadcrumbs setting]
  */
function reginald_curtomize_register( $wp_customize ){
  // Toggle site title
  $wp_customize->add_setting( 'display_site_title', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'display_site_title', array(
    'label'   => __( 'Display Site Title', 'reginald' ),
    'section' => 'title_tagline',
    'type'    => 'checkbox',
  ) );

  // Toggle site description
  $wp_customize->add_setting( 'display_tagline', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'display_tagline', array(
    'label'   => __( 'Display Tagline', 'reginald' ),
    'section' => 'title_tagline',
    'type'    => 'checkbox',
  ) );

  // Container background color
  $wp_customize->add_setting( 'container_color', array(
    'default'           => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color'
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'container_color', array(
    'label'    => __( 'Container background color', 'reginald' ),
    'section'  => 'colors',
    'settings' => 'container_color',
  ) ) );

  // Text color
  $wp_customize->add_setting( 'text_color', array(
    'default'           => '#000000',
    'sanitize_callback' => 'sanitize_hex_color'
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
    'label'    => __( 'Text Color', 'reginald' ),
    'section'  => 'colors',
    'settings' => 'text_color',
  ) ) );

  // Anchor text color
  $wp_customize->add_setting( 'link_color', array(
    'default'           => '#191919',
    'sanitize_callback' => 'sanitize_hex_color'
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'label'    => __( 'Link Color', 'reginald' ),
    'section'  => 'colors',
    'settings' => 'link_color',
  ) ) );

  // Site title color
  $wp_customize->add_setting( 'site_title_color', array(
    'default'           => '#191919',
    'sanitize_callback' => 'sanitize_hex_color'
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color', array(
    'label'    => __( 'Site Title Color', 'reginald' ),
    'section'  => 'colors',
    'settings' => 'site_title_color',
  ) ) );

  // Site tagline color
  $wp_customize->add_setting( 'tagline_color', array(
    'default'           => '#191919',
    'sanitize_callback' => 'sanitize_hex_color'
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline_color', array(
    'label'    => __( 'Tagline Color', 'reginald' ),
    'section'  => 'colors',
    'settings' => 'tagline_color',
  ) ) );

  // Entry meta section
  $wp_customize->add_section( 'entry_meta' , array(
    'title'    => __( 'Entry Metadata', 'reginald' ),
    'priority' => 80,
  ) );

  // Entry meta author
  $wp_customize->add_setting( 'entry_meta_author', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'entry_meta_author', array(
    'label'   => __( 'Display author', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox',
  ) );

  // Entry meta date
  $wp_customize->add_setting( 'entry_meta_date', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'entry_meta_date', array(
    'label'   => __( 'Display date posted', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox',
  ) );

  // Entry meta comments
  $wp_customize->add_setting( 'entry_meta_comments', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'entry_meta_comments', array(
    'label'   => __( 'Display comment count', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox',
  ) );

  // Entry meta post format
  $wp_customize->add_setting( 'entry_meta_post_format', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'entry_meta_post_format', array(
    'label'   => __( 'Display Post Format', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox'
  ) );

  // Entry meta categories
  $wp_customize->add_setting( 'entry_meta_categories', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'entry_meta_categories', array(
    'label'   => __( 'Display Categories', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox',
  ) );

  // Entry meta tags
  $wp_customize->add_setting( 'entry_meta_tags', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'entry_meta_tags', array(
    'label'   => __( 'Display Tags', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox',
  ) );

  // author bio
  $wp_customize->add_setting( 'author_bio', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'author_bio', array(
    'label'   => __( 'Display Author Bio', 'reginald' ),
    'section' => 'entry_meta',
    'type'    => 'checkbox'
  ) );

  // Theme options
  $wp_customize->add_section( 'design_options' , array(
    'title'    => __( 'Theme options', 'reginald' ),
    'priority' => 90,
  ) );

  // Display full content or summery/excerpt
  $wp_customize->add_setting( 'display_content', array(
    'default'           => false,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'display_content', array(
    'label'   => __( 'Display full content of posts on index pages', 'reginald' ),
    'section' => 'design_options',
    'type'    => 'checkbox',
  ) );

  // Display thumbnails on index pages
  $wp_customize->add_setting( 'thumbnail_index', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'thumbnail_index', array(
    'label'   => __( 'Display thumbnails on index pages', 'reginald' ),
    'section' => 'design_options',
    'type'    => 'checkbox',
  ) );

  // Display thumbnails on content pages
  $wp_customize->add_setting( 'thumbnail_content', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'thumbnail_content', array(
    'label'   => __( 'Display thumbnails on content pages', 'reginald' ),
    'section' => 'design_options',
    'type'    => 'checkbox',
  ) );

  // Display read more button
  $wp_customize->add_setting( 'read_more', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'read_more', array(
    'label'   => __( 'Display read more button', 'reginald' ),
    'section' => 'design_options',
    'type'    => 'checkbox',
  ) );

  // Social icons
  $wp_customize->add_section( 'social_icons' , array(
    'title'    => __( 'Social Media Icons', 'reginald' ),
    'priority' => 50,
  ) );

  // RSS link
  $wp_customize->add_setting( 'social_media_rss', array(
    'default'           => false,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'social_media_rss', array(
    'label'   => __( 'RSS Link', 'reginald' ),
    'section' => 'social_icons',
    'type'    => 'checkbox',
  ) );

  // Social icons
  global $reginald_social_icons;

  foreach ( $reginald_social_icons as $service => $icon ) {
    $wp_customize->add_setting( 'social_media_'.strtolower($service), array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'social_media_'.strtolower($service), array(
      'label'   => $service,
      'section' => 'social_icons',
      'type'    => 'text',
    ) );
  }

  // Footer section
  $wp_customize->add_section( 'footer' , array(
    'title'    => __( 'Footer', 'reginald' ),
    'priority' => 120,
  ) );

  // Change copyright text
  $wp_customize->add_setting( 'footer_text', array(
    'default'           => esc_attr( get_bloginfo('name') ),
    'sanitize_callback' => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'footer_text', array(
    'label'   => __( 'Footer text', 'reginald' ),
    'section' => 'footer',
    'type'    => 'text',
  ) );

  // Toggle copyright icon
  $wp_customize->add_setting( 'footer_copyright', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'footer_copyright', array(
    'label'   => __( 'Show Copyright Icon', 'reginald' ),
    'section' => 'footer',
    'type'    => 'checkbox',
  ) );

  // Toggle current year
  $wp_customize->add_setting( 'footer_year', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'footer_year', array(
    'label'   => __( 'Show Current Year', 'reginald' ),
    'section' => 'footer',
    'type'    => 'checkbox',
  ) );

  // Advertise theme author
    $wp_customize->add_setting( 'footer_advert', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'footer_advert', array(
    'label'   => __( 'Advertise Theme', 'reginald' ),
    'section' => 'footer',
    'type'    => 'checkbox',
  ) );

  // Scroll to top icon
  $wp_customize->add_setting( 'scrolltotop', array(
    'default'           => true,
    'sanitize_callback' => 'reginald_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'scrolltotop', array(
    'label'   => __( 'Scroll to top icon', 'reginald' ),
    'section' => 'footer',
    'type'    => 'checkbox',
  ) );
}
add_action('customize_register', 'reginald_curtomize_register');

/**
 * Sanitize checkboxes
 * 
 * @param  Boolean $input
 * @return Boolean
 */
function reginald_sanitize_checkbox( $input ) {
  return ( ( isset( $input ) && true == $input ) ? true : false );
}