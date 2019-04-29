<?php
/**
 * Theme setup
 *
 * @package musepeach
 */

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Shim for the the new wp_body_open() function that was added in 5.2
	 *
	 * @link https://make.wordpress.org/themes/2019/03/29/addition-of-new-wp_body_open-hook/
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function musepeach_setup() {
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	*/
	load_theme_textdomain( 'musepeach_setup', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/**
	 * Add support for default block styles.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#default-block-styles
	 */
	add_theme_support( 'wp-block-styles' );

	/**
	 * Update default image sizes instead of adding new ones
	 */
	update_option( 'large_size_w', 900 );
	update_option( 'large_size_h', 500 );
	update_option( 'large_crop', 1 );

	update_option( 'medium_large_size_w', 900 );

	update_option( 'medium_size_w', 535 );
	update_option( 'medium_size_h', 315 );
	update_option( 'medium_crop', 1 );

	/**
	 * Enable responsive embeds
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	 */
	add_theme_support( 'responsive-embeds' );

	/**
	 * Disable custom colors in block color palettes.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	 */
	add_theme_support( 'disable-custom-colors' );

	/**
	 * Disable custom font sizes in gutenberg.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	 */
	add_theme_support( 'disable-custom-font-sizes' );

	// Register menus main and footer.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'musepeach' ),
			'footer'  => esc_html__( 'Footer', 'musepeach' ),
		)
	);

}
add_action( 'after_setup_theme', 'musepeach_setup' );

/**
 * Enque styles
 */
function muspeach_styles() {

	// Remove gutenberg styles.
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'musepeach-fonts', '//fonts.googleapis.com/css?family=Nunito:700,800' ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion

	// Enqueue main stylesheet.
	wp_enqueue_style(
		'musepeach',
		get_theme_file_uri( '/assets/css/main.css' ),
		array(),
		filemtime( get_theme_file_path( '/assets/css/main.css' ) )
	);

}
add_action( 'wp_enqueue_scripts', 'muspeach_styles' );

/**
 * Enqueue scripts.
 */
function musepeach_scripts() {

	// Enqueue main script.
	wp_enqueue_script(
		'musepeach',
		get_theme_file_uri( '/assets/js/main.js' ),
		array(),
		filemtime( get_theme_file_path( '/assets/js/main.js' ) ),
		true
	);

}
add_action( 'wp_enqueue_scripts', 'musepeach_scripts' );
