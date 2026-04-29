<?php
/**
 * Related products for post.
 *
 * @package BuildingLift_B2B
 */

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

$products = get_posts(
	array(
		'post_type'      => 'product',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	)
);

if ( empty( $products ) ) {
	return;
}
?>
<section class="bl-home-section">
	<h2><?php esc_html_e( 'Related Products', 'buildinglift-b2b' ); ?></h2>
	<div class="bl-home-featured__grid">
		<?php foreach ( $products as $post ) : setup_postdata( $post ); ?>
			<?php get_template_part( 'template-parts/archive/product', 'card' ); ?>
		<?php endforeach; wp_reset_postdata(); ?>
	</div>
</section>
