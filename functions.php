<?php
/**
	* Reginald Functions
	*
	* This functions file contains the the mainly used features of a WordPress theme
	* Uncomment or delete lines as needed
	*
 	* @package Reginald
	* @since Reginald 1.0
	*/

if ( ! function_exists( 'reginald_setup' ) ) :
	/**
	* Initial theme setup
	*
	* @since Reginald 1.0
	*/
	function reginald_setup() {

		// Support for translation files
		load_theme_textdomain( 'reginald', get_template_directory() . '/languages' );

		// Set content width
		if ( !isset( $content_width ) ) $content_width = 900;

		// Adds editor styles
		add_editor_style( str_replace( ',', '%2C', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,800italic,700italic,700,600italic,400italic,300italic,300' ) );
		add_editor_style();

		// Enable support for Post Formats
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		// Enables support for custom logo
		add_theme_support( 'custom-logo' );

		//Enable support for Post Thumbnails on posts, pages and more
		add_theme_support( 'post-thumbnails' );

		//Support for custom background settings
		add_theme_support( 'custom-background', array(
			'default-color'			 => '#1e73be',
			'default-image'			 => '',
		) );

		//Support for custom header settings
		add_theme_support( 'custom-header', array(
			'default-image'						=> '',
			'random-default'					=> false,
			'width'										=> 825,
			'height'									=> 300,
			'flex-height'							=> true,
			'flex-width'							=> true,
			'header-text'							=> false,
			'uploads'									=> true,
		) );

		// Adds RSS feed in head
		add_theme_support( 'automatic-feed-links' );

		// Make core WordPress makup output valid HTML5
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// <title> tag provided by WordPress
		add_theme_support( 'title-tag' );

		// wp_nav_menu() setup
		register_nav_menus( array(
			'header' => __('Header Menu', 'reginald'),
			'footer' => __('Footer Menu', 'reginald')
		));
	}
endif;
add_action( 'after_setup_theme', 'reginald_setup' );


/**
	* Basic widget area structure
	*
	* @since Reginald 1.0
	*/
function reginald_widget_init(){
	register_sidebar( array(
		'name' 					=> __('Header Widget Area', 'reginald'),
		'id' 						=> 'header-widget-area',
		'description'		=> __('Widget area above the content', 'reginald'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h5 class="widget-title">',
		'after_title' 	=> '</h5>',
	) );

	register_sidebar( array(
		'name' 					=> __('Sidebar Widget Area', 'reginald'),
		'id' 						=> 'sidebar-widget-area',
		'description'		=> __('Widget area at the side of the content', 'reginald'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h5 class="widget-title">',
		'after_title' 	=> '</h5>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area (Left)', 'reginald'),
		'id' 						=> 'footer-widget-area-one',
		'description'		=> __('Widget area in the footer', 'reginald'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h5 class="widget-title">',
		'after_title' 	=> '</h5>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area (Left Center)', 'reginald'),
		'id' 						=> 'footer-widget-area-two',
		'description'		=> __('Widget area in the footer', 'reginald'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h5 class="widget-title">',
		'after_title' 	=> '</h5>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area (Right Center)', 'reginald'),
		'id' 						=> 'footer-widget-area-three',
		'description'		=> __('Widget area in the footer', 'reginald'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h5 class="widget-title">',
		'after_title' 	=> '</h5>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area (Right)', 'reginald'),
		'id' 						=> 'footer-widget-area-four',
		'description'		=> __('Widget area in the footer', 'reginald'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h5 class="widget-title">',
		'after_title' 	=> '</h5>',
	) );
}
add_action( 'widgets_init', 'reginald_widget_init' );

/**
	* Custom "Read more" on excerpts
	*
	* @since Reginald 1.0
	*/
function reginald_excerpt_read_more($more) {
	global $post;

	if( !get_theme_mod('read_more', true) ){
		return '... <a href="'. esc_url( get_permalink($post->ID) ) . '">Read more</a>';
	}else{
		return '...';
	}
}
add_filter('excerpt_more', 'reginald_excerpt_read_more');

/**
	* Scripts, Styles and fonts
	*
	* @since Reginald 1.0
	*/
function reginald_scripts(){
	// Enqueue the font Open Sans from google
	wp_enqueue_style( 'reginald-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,800italic,700italic,700,600italic,400italic,300italic,300', array(), null);

	// Enqueue Font Awesome (example icon set)
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array(), '4.6.3');

	// Enqueue style.css from root theme folder
	wp_enqueue_style( 'reginald-style', get_stylesheet_uri() );

	// Enqueue theme JS and include jQuery
	wp_enqueue_script( 'reginald-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), wp_get_theme()->get('Version'), true );

	// Comment-reply script
	if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reginald_scripts' );

/**
	* Add classes to body depending on custom changes and content
	*
	* @since Reginald 1.0
	*/
function reginald_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-widget-area' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'reginald_body_classes' );

/**
	* Add classes to posts depending on custom changes and content
	*
	* @since Reginald 1.0
	*/
function reginald_post_classes( $classes ) {
	// adds a class of loop-excerpt to flex excerpt and post_thumbnail
	if( !get_theme_mod( 'display_content', false ) && !is_singular() ){
		$classes[] =  'archive-entry';
	}

	return $classes;
}
add_filter( 'post_class', 'reginald_post_classes' );


/**
	* Customized CSS options
	*
	* @since Reginald 1.2.5
	*/
function reginald_customize_styles(){
	$options = [
		'#'.esc_html( get_background_color() ),
		esc_html( get_theme_mod('text_color', '#000000') ),
		esc_html( get_theme_mod('container_color', '#ffffff') ),
		esc_html( get_theme_mod('link_color', '#191919') ),
		esc_html( get_theme_mod('site_title_color', '#191919') ),
		esc_html( get_theme_mod('tagline_color', '#191919') )
	];

	$css = '
		body{
			background:  %1$s;
			color: %2$s;
		}

		#header-menu-container a{
			color: %2$s;
		}

		#site-container,
		#header-menu-container,
		#header-menu-container .sub-menu{
			background-color: %3$s;
		}

		a{
			color: %4$s;
		}

		#site-title a{
			color: %5$s;
		}

		#site-tagline{
			color: %6$s;
		}
	';
	wp_add_inline_style( 'reginald-style', vsprintf($css, $options) );
}
add_action( 'wp_enqueue_scripts', 'reginald_customize_styles' );

/**
	* Included files
	* - theme functions
	* - wp-customize
	*
	* @since Reginald 1.0
	*/
require get_template_directory() . '/inc/theme_functions.php';
require get_template_directory() . '/inc/customize.php';

?>
