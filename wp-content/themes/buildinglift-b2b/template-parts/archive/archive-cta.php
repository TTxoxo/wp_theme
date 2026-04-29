<?php
/**
 * Archive CTA and FAQ.
 *
 * @package BuildingLift_B2B
 */

$quote_url = buildinglift_b2b_get_option( 'request_quote_url', home_url( '/contact-us/' ) );
$faqs      = array(
	array(
		'q' => esc_html__( 'How do I choose the right model for my project?', 'buildinglift-b2b' ),
		'a' => esc_html__( 'Send us your working height, load, and application details. We will suggest suitable options.', 'buildinglift-b2b' ),
	),
	array(
		'q' => esc_html__( 'Can you support spare parts matching?', 'buildinglift-b2b' ),
		'a' => esc_html__( 'Yes, share model information and images for faster matching support.', 'buildinglift-b2b' ),
	),
);
?>
<section class="bl-archive-faq">
	<div class="bl-container">
		<h2><?php esc_html_e( 'FAQ', 'buildinglift-b2b' ); ?></h2>
		<?php foreach ( $faqs as $faq ) : ?>
			<article class="bl-faq-item"><h3><?php echo esc_html( $faq['q'] ); ?></h3><p><?php echo esc_html( $faq['a'] ); ?></p></article>
		<?php endforeach; ?>
	</div>
</section>
<?php if ( '' !== $quote_url ) : ?>
<section class="bl-archive-cta">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Need Product Selection Support?', 'buildinglift-b2b' ); ?></h2>
		<a class="bl-btn bl-btn--primary" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Quote', 'buildinglift-b2b' ); ?></a>
	</div>
</section>
<?php endif; ?>
