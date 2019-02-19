<?php
/**
 * PandaCorp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define text domain.
 */
define( 'THEME_TEXTDOMAIN', 'pandacorp' );

/**
 * Register supported features.
 */
function pandacorp_register_supported_features() {
	// Register theme translations.
	load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/languages' );

	// Let WordPress manage the document title.
	// By adding theme support, we declare that this theme does not use a
	// hard-coded <title> tag in the document head, and expect WordPress to
	// provide it for us.
	add_theme_support( 'title-tag' );

	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support(
		'html5',
		[
			'caption',
		]
	);

	// Add support for core custom logo.
	// @link https://codex.wordpress.org/Theme_Logo
	add_theme_support(
		'custom-logo',
		[
			'width'       => 300,
			'height'      => 125,
			'flex-width'  => true,
			'flex-height' => true,
		]
	);

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'editor-styles.css' );

	// Add custom editor font sizes.
	add_theme_support(
		'editor-font-sizes',
		[
			[
				'name'      => __( 'Small', THEME_TEXTDOMAIN ),
				'shortName' => __( 'S', THEME_TEXTDOMAIN ),
				'size'      => 19,
				'slug'      => 'small',
			],
			[
				'name'      => __( 'Medium', THEME_TEXTDOMAIN ),
				'shortName' => __( 'M', THEME_TEXTDOMAIN ),
				'size'      => 22,
				'slug'      => 'medium',
			],
			[
				'name'      => __( 'Large', THEME_TEXTDOMAIN ),
				'shortName' => __( 'L', THEME_TEXTDOMAIN ),
				'size'      => 36,
				'slug'      => 'large',
			],
			[
				'name'      => __( 'Huge', THEME_TEXTDOMAIN ),
				'shortName' => __( 'XL', THEME_TEXTDOMAIN ),
				'size'      => 49,
				'slug'      => 'huge',
			],
		]
	);

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Register menu location(s).
	register_nav_menus(
		[
			'main-menu' => __( 'Main menu', THEME_TEXTDOMAIN ),
		]
	);
}

add_action( 'after_setup_theme', 'pandacorp_register_supported_features' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function pandacorp_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'pandacorp_content_width', 1024 );
}

add_action( 'after_setup_theme', 'pandacorp_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function pandacorp_scripts_and_styles() {
	// Enqueue style reset and base stylesheet.
	// Feel free to add/remove any files or resets you wish.
	wp_enqueue_style( 'pandacorp-reset', get_stylesheet_directory_uri() . '/assets/css/reset.css', [], wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'pandacorp-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );

	// Select which JavaScript file you wish to use.
	// One of them is wrapped with an anonymous function that includes jQuery
	// and the enqueued script have jQuery as a dependency.
	// The other file is a vanilla JavaScript file without any jQuery dependencies.
	wp_enqueue_script( 'pandacorp-main', get_theme_file_uri( '/assets/js/main.js' ), [], wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'pandacorp-main-jquery', get_theme_file_uri( '/assets/js/jquery.main.js' ), [ 'jquery' ], wp_get_theme()->get( 'Version' ), true );
}

add_action( 'wp_enqueue_scripts', 'pandacorp_scripts_and_styles' );
