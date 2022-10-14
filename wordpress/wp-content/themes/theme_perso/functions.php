<?php
/**
 * igc31w functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package igc31w
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function igc31w_setup() {

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	// add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'igc31w' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	/*
	add_theme_support(
		'custom-background',
		apply_filters(
			'igc31w_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	*/

	// Add theme support for selective refresh for widgets.
	// add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'igc31w_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function igc31w_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'igc31w_content_width', 640 );
}
add_action( 'after_setup_theme', 'igc31w_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

 /*
function igc31w_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'igc31w' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'igc31w' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'igc31w_widgets_init' );
*/

/**
 * Enqueue scripts and styles.
 */
function igc31w_scripts() {
	//wp_enqueue_style( 'igc31w-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style('main-styles',
					get_template_directory_uri() . '/style.css',
					array(),
					filemtime(get_template_directory() . '/style.css'),
					 false);


	wp_style_add_data( 'igc31w-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'igc31w-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	/*
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	*/
}
add_action( 'wp_enqueue_scripts', 'igc31w_scripts' );

