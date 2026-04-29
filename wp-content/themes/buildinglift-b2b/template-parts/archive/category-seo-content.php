<?php
/**
 * Category bottom SEO content.
 *
 * @package BuildingLift_B2B
 */

$term = is_product_taxonomy() ? get_queried_object() : null;

if ( ! $term || is_wp_error( $term ) ) {
	return;
}

$seo_content = term_description( $term->term_id, $term->taxonomy );
if ( '' === trim( wp_strip_all_tags( $seo_content ) ) ) {
	return;
}
?>
<section class="bl-archive-seo">
	<div class="bl-container">
		<h2><?php esc_html_e( 'More About This Product Category', 'buildinglift-b2b' ); ?></h2>
		<div class="bl-archive-seo__content"><?php echo wp_kses_post( wpautop( $seo_content ) ); ?></div>
	</div>
</section>
