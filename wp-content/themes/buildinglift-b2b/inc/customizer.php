<?php
/**
 * Theme customizer settings.
 *
 * @package BuildingLift_B2B
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function buildinglift_b2b_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'buildinglift_b2b_contact',
		array(
			'title'    => esc_html__( 'BuildingLift Contact', 'buildinglift-b2b' ),
			'priority' => 30,
		)
	);

	$fields = array(
		'email'             => esc_html__( 'Email', 'buildinglift-b2b' ),
		'whatsapp'          => esc_html__( 'WhatsApp', 'buildinglift-b2b' ),
		'address'           => esc_html__( 'Address', 'buildinglift-b2b' ),
		'header_cta_text'   => esc_html__( 'Header CTA Text', 'buildinglift-b2b' ),
		'footer_contact'    => esc_html__( 'Footer Contact Info', 'buildinglift-b2b' ),
	);

	foreach ( $fields as $key => $label ) {
		$setting_id = 'buildinglift_b2b_' . $key;
		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			$setting_id,
			array(
				'label'   => $label,
				'section' => 'buildinglift_b2b_contact',
				'type'    => 'text',
			)
		);
	}

	$wp_customize->add_setting(
		'buildinglift_b2b_request_quote_url',
		array(
			'default'           => home_url( '/contact-us/' ),
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'buildinglift_b2b_request_quote_url',
		array(
			'label'   => esc_html__( 'Request Quote URL', 'buildinglift-b2b' ),
			'section' => 'buildinglift_b2b_contact',
			'type'    => 'url',
		)
	);

	$toggle_fields = array(
		'show_price'         => esc_html__( 'Show Price', 'buildinglift-b2b' ),
		'show_cart_button'   => esc_html__( 'Show Cart Button', 'buildinglift-b2b' ),
		'enable_sticky'      => esc_html__( 'Enable Sticky Header', 'buildinglift-b2b' ),
		'enable_home_slider' => esc_html__( 'Enable Home Slider', 'buildinglift-b2b' ),
	);

	foreach ( $toggle_fields as $key => $label ) {
		$setting_id = 'buildinglift_b2b_' . $key;
		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => false,
				'sanitize_callback' => 'rest_sanitize_boolean',
			)
		);

		$wp_customize->add_control(
			$setting_id,
			array(
				'label'   => $label,
				'section' => 'buildinglift_b2b_contact',
				'type'    => 'checkbox',
			)
		);
	}
}
add_action( 'customize_register', 'buildinglift_b2b_customize_register' );

function buildinglift_b2b_get_option( $key, $default = '' ) {
	$value = get_theme_mod( 'buildinglift_b2b_' . $key, $default );
	return is_string( $value ) ? trim( $value ) : $value;
}
