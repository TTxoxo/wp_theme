<?php
/**
 * Enqueue scripts and styles.
 *
 * @package BuildingLift_B2B
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function buildinglift_b2b_enqueue_assets() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'buildinglift-b2b-style', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'buildinglift-b2b-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'buildinglift-b2b-style' ), $version );
	wp_enqueue_style( 'buildinglift-b2b-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array( 'buildinglift-b2b-main' ), $version );


	if ( function_exists( 'is_woocommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() ) ) {
		wp_enqueue_style( 'buildinglift-b2b-archive', get_stylesheet_directory_uri() . '/assets/css/archive.css', array( 'buildinglift-b2b-main' ), $version );
		wp_enqueue_style( 'buildinglift-b2b-product-grid', get_stylesheet_directory_uri() . '/assets/css/product.css', array( 'buildinglift-b2b-archive' ), $version );
	}

	wp_enqueue_script( 'buildinglift-b2b-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'buildinglift_b2b_enqueue_assets' );
