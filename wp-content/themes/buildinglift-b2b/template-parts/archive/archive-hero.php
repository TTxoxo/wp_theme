<?php
/**
 * Archive hero block.
 *
 * @package BuildingLift_B2B
 */

$term = is_product_taxonomy() ? get_queried_object() : null;
$title = woocommerce_page_title( false );
$description = '';

if ( $term && ! is_wp_error( $term ) ) {
	$description = term_description( $term->term_id, $term->taxonomy );
} elseif ( is_shop() ) {
	$shop_page_id = wc_get_page_id( 'shop' );
	$description  = $shop_page_id > 0 ? get_post_field( 'post_excerpt', $shop_page_id ) : '';
}
?>
<section class="bl-archive-hero">
	<div class="bl-container">
		<?php woocommerce_breadcrumb(); ?>
		<h1><?php echo esc_html( $title ); ?></h1>
		<?php if ( '' !== trim( wp_strip_all_tags( $description ) ) ) : ?>
			<div class="bl-archive-hero__desc"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</div>
</section>
