<?php
/**
 * Theme cleanup - remove unnecessary stuff
 *
 * @package musepeach
 */

// Disable the emoji's.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove generator tag.
remove_action( 'wp_head', 'wp_generator' );

// Remove EditURI and wlwmanifest.
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );


// @codingStandardsIgnoreStart

	// Removing front end admin bar.
	add_filter( 'show_admin_bar', '__return_false' );

// @codingStandardsIgnoreEnd
