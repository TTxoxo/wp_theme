<?php
/**
 * Related products template.
 *
 * @package BuildingLift_B2B
 */

defined( 'ABSPATH' ) || exit;

if ( empty( $related_products ) ) {
	return;
}
?>
<section class="bl-related-products bl-home-section">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Related Products', 'buildinglift-b2b' ); ?></h2>
		<?php woocommerce_product_loop_start(); ?>
		<?php foreach ( $related_products as $related_product ) :
			$post_object = get_post( $related_product->get_id() );
			setup_postdata( $GLOBALS['post'] = $post_object );
			wc_get_template_part( 'content', 'product' );
		endforeach; ?>
		<?php woocommerce_product_loop_end(); ?>
	</div>
</section>
<?php wp_reset_postdata(); ?>
