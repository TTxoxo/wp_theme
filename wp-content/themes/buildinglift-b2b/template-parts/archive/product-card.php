<?php
/**
 * Product card component for archives.
 *
 * @package BuildingLift_B2B
 */

global $product;

if ( ! $product instanceof WC_Product ) {
	return;
}

$product_id   = $product->get_id();
$title        = get_the_title( $product_id );
$excerpt      = get_the_excerpt( $product_id );
$terms        = get_the_terms( $product_id, 'product_cat' );
$request_url  = buildinglift_b2b_get_option( 'request_quote_url', home_url( '/contact-us/' ) );
$image_alt    = get_post_meta( get_post_thumbnail_id( $product_id ), '_wp_attachment_image_alt', true );
$image_alt    = '' !== trim( $image_alt ) ? $image_alt : $title;
?>
<article class="bl-product-card">
	<a class="bl-product-card__image" href="<?php echo esc_url( get_permalink( $product_id ) ); ?>">
		<?php
		echo get_the_post_thumbnail(
			$product_id,
			'medium',
			array(
				'alt'     => esc_attr( $image_alt ),
				'loading' => 'lazy',
			)
		);
		?>
	</a>
	<div class="bl-product-card__content">
		<h3><a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>"><?php echo esc_html( $title ); ?></a></h3>
		<?php if ( '' !== trim( $excerpt ) ) : ?>
			<p><?php echo esc_html( wp_trim_words( $excerpt, 24 ) ); ?></p>
		<?php endif; ?>
		<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
			<p class="bl-product-card__cats"><?php echo esc_html( implode( ', ', wp_list_pluck( $terms, 'name' ) ) ); ?></p>
		<?php endif; ?>
		<div class="bl-product-card__actions">
			<a class="bl-btn bl-btn--secondary" href="<?php echo esc_url( get_permalink( $product_id ) ); ?>"><?php esc_html_e( 'View Details', 'buildinglift-b2b' ); ?></a>
			<?php if ( '' !== $request_url ) : ?>
				<a class="bl-btn bl-btn--primary" href="<?php echo esc_url( $request_url ); ?>"><?php esc_html_e( 'Request Quote', 'buildinglift-b2b' ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</article>
