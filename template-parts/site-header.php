<?php
/**
 * Template for displaying the Site's header
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

?>
<header class="site-header">

  <?php if ( has_nav_menu( 'header' ) ) : ?>
    <nav class="header-nav-container">
      <input type="checkbox" id="header-nav-toggle" />

      <label for="header-nav-toggle" class="header-nav-toggle-label">
        <span></span>
        <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'reginald' ); ?></span>
      </label><!-- .header-nav-toggle-label -->

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'header',
          'menu_class'     => 'header-nav',
          'container'      => false,
        )
      );
      ?>
    </nav>
  <?php endif; ?>

  <?php if ( get_theme_mod( 'display_site_title', true ) ) : ?>
    <?php if ( is_front_page() && ! is_paged() ) : ?>
      <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1><!-- .site-title -->
    <?php elseif ( is_front_page() || is_home() ) : ?>
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
      </h1><!-- .site-title -->
    <?php else : ?>
      <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
      </p><!-- .site-title -->
    <?php endif; ?>
  <?php endif; ?>

  <?php
  if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }
  ?>

  <?php if ( get_theme_mod( 'display_tagline', true ) ) : ?>
    <p class="site-tagline"><?php bloginfo( 'description' ); ?></p><!-- .site-tagline -->
  <?php endif; ?>

  <?php reginald_social_links(); ?>

</header><!-- .site-header -->
