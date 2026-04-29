<?php
/**
 * Product summary block.
 *
 * @package BuildingLift_B2B
 */

defined( 'ABSPATH' ) || exit;

global $product;

$excerpt = $post->post_excerpt;
$terms = get_the_terms( $product->get_id(), 'product_cat' );
$tags = get_the_terms( $product->get_id(), 'product_tag' );
$quote_url = buildinglift_b2b_get_option( 'request_quote_url', home_url( '/contact-us/' ) );
$email = buildinglift_b2b_get_option( 'email' );
$whatsapp = buildinglift_b2b_get_option( 'whatsapp' );
?>
<div class="bl-product-hero__summary">
	<h1><?php the_title(); ?></h1>
	<?php if ( '' !== trim( $excerpt ) ) : ?>
		<div class="bl-product-hero__excerpt"><?php echo wp_kses_post( wpautop( $excerpt ) ); ?></div>
	<?php endif; ?>
	<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
		<p><strong><?php esc_html_e( 'Categories:', 'buildinglift-b2b' ); ?></strong> <?php echo esc_html( implode( ', ', wp_list_pluck( $terms, 'name' ) ) ); ?></p>
	<?php endif; ?>
	<?php if ( $tags && ! is_wp_error( $tags ) ) : ?>
		<p><strong><?php esc_html_e( 'Tags:', 'buildinglift-b2b' ); ?></strong> <?php echo esc_html( implode( ', ', wp_list_pluck( $tags, 'name' ) ) ); ?></p>
	<?php endif; ?>
	<div class="bl-product-hero__actions">
		<?php if ( '' !== $quote_url ) : ?><a class="bl-btn bl-btn--primary" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Quote', 'buildinglift-b2b' ); ?></a><?php endif; ?>
		<?php if ( '' !== $whatsapp ) : ?><a class="bl-btn bl-btn--secondary" href="https://wa.me/<?php echo esc_attr( preg_replace( '/\D+/', '', $whatsapp ) ); ?>"><?php esc_html_e( 'WhatsApp', 'buildinglift-b2b' ); ?></a><?php endif; ?>
		<?php if ( '' !== $email ) : ?><a class="bl-btn bl-btn--secondary" href="mailto:<?php echo esc_attr( $email ); ?>"><?php esc_html_e( 'Email', 'buildinglift-b2b' ); ?></a><?php endif; ?>
	</div>
</div>
