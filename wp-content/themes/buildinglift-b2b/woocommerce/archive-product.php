<?php
/**
 * Product archive template override.
 *
 * @package BuildingLift_B2B
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

do_action( 'woocommerce_before_main_content' );

get_template_part( 'template-parts/archive/archive', 'hero' );

if ( woocommerce_product_loop() ) {
	do_action( 'woocommerce_before_shop_loop' );

echo '<div class="bl-container">';
	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();
			do_action( 'woocommerce_shop_loop' );
			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();
	echo '</div>';

	do_action( 'woocommerce_after_shop_loop' );
} else {
	do_action( 'woocommerce_no_products_found' );
}

get_template_part( 'template-parts/archive/category', 'seo-content' );
get_template_part( 'template-parts/archive/archive', 'cta' );

do_action( 'woocommerce_after_main_content' );
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
