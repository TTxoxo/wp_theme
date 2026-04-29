<?php
/**
 * Theme setup.
 *
 * @package BuildingLift_B2B
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function buildinglift_b2b_theme_setup() {
	load_child_theme_textdomain( 'buildinglift-b2b', get_stylesheet_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	register_nav_menus(
		array(
			'header_menu'         => esc_html__( 'Header Menu', 'buildinglift-b2b' ),
			'footer_products'     => esc_html__( 'Footer Products', 'buildinglift-b2b' ),
			'footer_applications' => esc_html__( 'Footer Applications', 'buildinglift-b2b' ),
			'footer_resources'    => esc_html__( 'Footer Resources', 'buildinglift-b2b' ),
			'footer_company'      => esc_html__( 'Footer Company', 'buildinglift-b2b' ),
			'footer_contact'      => esc_html__( 'Footer Contact', 'buildinglift-b2b' ),
		)
	);
}
add_action( 'after_setup_theme', 'buildinglift_b2b_theme_setup' );

function buildinglift_b2b_header_menu_fallback() {
	echo '<ul class="menu"><li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'buildinglift-b2b' ) . '</a></li></ul>';
}

function buildinglift_b2b_parent_theme_notice() {
	$theme = wp_get_theme();
	if ( strtolower( (string) $theme->get( 'Template' ) ) !== 'generatepress' ) {
		echo '<div class="notice notice-error"><p>' . esc_html__( 'BuildingLift B2B requires GeneratePress as the parent theme.', 'buildinglift-b2b' ) . '</p></div>';
	}
}
add_action( 'admin_notices', 'buildinglift_b2b_parent_theme_notice' );
