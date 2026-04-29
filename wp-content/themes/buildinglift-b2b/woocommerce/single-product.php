<?php
/**
 * Single product template override.
 *
 * @package BuildingLift_B2B
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

while ( have_posts() ) :
	the_post();
	do_action( 'woocommerce_before_main_content' );

	get_template_part( 'template-parts/product/product', 'hero' );
	get_template_part( 'template-parts/product/product', 'specs' );
	get_template_part( 'template-parts/product/product', 'description' );
	get_template_part( 'template-parts/product/product', 'applications' );
	get_template_part( 'template-parts/product/product', 'faq' );
	get_template_part( 'template-parts/product/product', 'related-links' );
	do_action( 'woocommerce_after_single_product_summary' );
	get_template_part( 'template-parts/product/product', 'inquiry' );

	do_action( 'woocommerce_after_main_content' );
endwhile;

get_footer( 'shop' );
