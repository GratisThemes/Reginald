<?php
/**
 * The template for displaying the head
 * Displays all of the head element and everything up until the content.
 *
 * @package Reginald
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  
  <?php if ( is_singular() && pings_open() ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif;?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <div id="site-wrapper">
    
    <header id="site-header">

      <?php if ( has_nav_menu( 'header' ) ): ?>
        <input type="checkbox" id="header-nav-toggle" />

        <label for="header-nav-toggle" id="header-nav-toggle-label">
          <span></span>
          <span class="screen-reader-text"><?php _e( 'Toggle menu', 'reginald' ); ?></span>
        </label><!-- #header-nav-toggle-label -->

        <?php wp_nav_menu( array(
          'theme_location' => 'header',
          'menu_id'        => 'header-nav',
          'container'      => false,
        ) ); ?>
      <?php endif; ?>

      <?php if ( get_theme_mod( 'display_site_title', true ) ): ?>
        <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>">
          <?php bloginfo( 'name' ); ?>
        </a><!-- .site-title -->
      <?php endif; ?>

      <?php if ( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>

      <?php if ( get_theme_mod( 'display_tagline', true ) ): ?>
        <div class="site-tagline">
          <?php bloginfo( 'description' ); ?>
        </div><!-- .site-tagline -->
      <?php endif; ?>

      <?php reginald_social_links(); ?>

      <?php if( has_header_image() && !is_singular() ): ?>
        <img src="<?php esc_url( header_image() ); ?>"
          height="<?php echo get_custom_header()->height; ?>"
          width="<?php echo get_custom_header()->width; ?>"
          alt="<?php _e('Header Image', 'reginald'); ?>"
          class="header-image" />
      <?php endif; ?>

    </header><!-- #site-header -->

    <?php get_sidebar( 'header' ); ?>