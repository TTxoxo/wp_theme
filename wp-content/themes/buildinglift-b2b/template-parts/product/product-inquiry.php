<?php
/**
 * Bottom inquiry CTA.
 *
 * @package BuildingLift_B2B
 */

$quote_url = buildinglift_b2b_get_option( 'request_quote_url', home_url( '/contact-us/' ) );
if ( '' === $quote_url ) {
	return;
}
?>
<section class="bl-archive-cta">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Need a Solution for Your Project?', 'buildinglift-b2b' ); ?></h2>
		<a class="bl-btn bl-btn--primary" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Quote', 'buildinglift-b2b' ); ?></a>
	</div>
</section>
