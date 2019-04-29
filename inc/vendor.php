<?php
/**
 * Vendor related stuff
 *
 * @package musepeach
 */

if ( function_exists( 'yoast_breadcrumb' ) ) {

	/**
	 * Remove post title as last itme in breadcrumbs
	 *
	 * @param array $links - breacrumbs array.
	 * @return $links
	 */
	function musepeach_titleless_breadcrumbs( $links ) {
		if ( count( $links ) > 1 ) {
			array_pop( $links );
		}

		return $links;
	}
	add_filter( 'wpseo_breadcrumb_links', 'musepeach_titleless_breadcrumbs' );

	/**
	 * Because yoast doesn't add a link to last breadcrumb item we have
	 * to add it back manually but we do so by changeing all links
	 *
	 * @param [type] $output - html crumb.
	 * @param [type] $link - link info.
	 * @return $output
	 */
	function musepeach_readd_last_url( $output, $link ) {
		$output  = '<a href="' . $link['url'] . '" >';
		$output .= $link['text'];
		$output .= '</a>';
		return $output;
	}
	add_filter( 'wpseo_breadcrumb_single_link', 'musepeach_readd_last_url', 10, 2 );

}

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {

	/**
	 * Remove default Contact Form scripts
	 */
	add_filter( 'wpcf7_load_js', '__return_false' );
	add_filter( 'wpcf7_load_css', '__return_false' );

	/**
	 * Add cf7 scripts
	 *
	 * @return void
	 */
	function musepeach_add_cf7() {
		if ( is_page( 'support' ) ) {
			wpcf7_enqueue_scripts();
			wpcf7_enqueue_styles();
		}
	}
	add_action( 'wp_enqueue_scripts', 'musepeach_add_cf7' );

}

