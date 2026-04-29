<?php
/**
 * Product loop card override.
 *
 * @package BuildingLift_B2B
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( 'bl-product-card-item', $product ); ?>>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<?php get_template_part( 'template-parts/archive/product', 'card' ); ?>
	<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</li>
