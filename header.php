<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Reginald
 * @since Reginald 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="site-container">
		<header id="site-header">
			<i id="menu-toggle"class="fa fa-bars"></i>

			<?php if ( has_nav_menu( 'header' )):
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_class'     => 'header-menu',
					'container_id'	 => 'header-menu-container'
				) );
			endif; ?>

			<?php if( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>

			<?php if( get_theme_mod('display_site_title', true) ): ?>
				<h3 id="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</h3>
			<?php endif; ?>

			<?php if( get_theme_mod('display_tagline', true) ):?>
				<p id="site-tagline"><?php bloginfo( 'description' ) ?></p>
			<?php endif; ?>

			<?php reginald_social_media(); ?>

		</header>

		<?php get_sidebar('header'); ?>

		<?php if( has_header_image() && !is_single() ): ?>
			<img  src="<?php esc_url( header_image() ); ?>"
				height="<?php echo get_custom_header()->height; ?>"
				width="<?php echo get_custom_header()->width; ?>"
				alt="<?php _e('Header Image', 'reginald'); ?>"
				class="header-image" />
		<?php endif; ?>
