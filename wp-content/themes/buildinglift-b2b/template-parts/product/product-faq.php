<?php
/**
 * Product FAQ.
 *
 * @package BuildingLift_B2B
 */

$faq_items = array(
	array(
		'q' => esc_html__( 'Can this product be configured for local power standards?', 'buildinglift-b2b' ),
		'a' => esc_html__( 'Yes, configuration can be adjusted based on project requirements.', 'buildinglift-b2b' ),
	),
);
?>
<section class="bl-home-section">
	<div class="bl-container">
		<h2><?php esc_html_e( 'FAQ', 'buildinglift-b2b' ); ?></h2>
		<?php foreach ( $faq_items as $item ) : ?>
			<article class="bl-faq-item"><h3><?php echo esc_html( $item['q'] ); ?></h3><p><?php echo esc_html( $item['a'] ); ?></p></article>
		<?php endforeach; ?>
	</div>
</section>
