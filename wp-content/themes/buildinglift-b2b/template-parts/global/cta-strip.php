<?php
/**
 * Global CTA strip.
 *
 * @package BuildingLift_B2B
 */

$cta_url  = buildinglift_b2b_get_option( 'request_quote_url', home_url( '/contact-us/' ) );
$cta_text = buildinglift_b2b_get_option( 'header_cta_text', esc_html__( 'Request Quote', 'buildinglift-b2b' ) );

if ( '' === $cta_url || '' === $cta_text ) {
	return;
}
?>
<section class="bl-cta-strip">
	<div class="bl-container bl-cta-strip__inner">
		<p><?php esc_html_e( 'Need platform or spare parts support for your project?', 'buildinglift-b2b' ); ?></p>
		<a href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_text ); ?></a>
	</div>
</section>
