<?php
/**
 * Theme bootstrap file.
 *
 * @package BuildingLift_B2B
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$buildinglift_b2b_includes = array(
	'inc/setup.php',
	'inc/enqueue.php',
	'inc/woocommerce.php',
	'inc/seo-helpers.php',
	'inc/breadcrumbs.php',
	'inc/template-tags.php',
	'inc/performance.php',
	'inc/customizer.php',
);

foreach ( $buildinglift_b2b_includes as $buildinglift_b2b_file ) {
	$buildinglift_b2b_path = get_stylesheet_directory() . '/' . $buildinglift_b2b_file;

	if ( file_exists( $buildinglift_b2b_path ) ) {
		require_once $buildinglift_b2b_path;
	}
}
