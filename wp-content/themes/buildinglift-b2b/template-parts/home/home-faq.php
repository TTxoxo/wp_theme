<?php
/**
 * Home FAQ section.
 *
 * @package BuildingLift_B2B
 */

$faqs = array(
	array(
		'q' => 'Can you support custom voltage and project requirements?',
		'a' => 'Yes. Share your project country and requirements, and we can provide suitable configurations.',
	),
	array(
		'q' => 'Do you provide spare parts matching support?',
		'a' => 'Yes. Provide model details and photos, and we will assist with parts matching.',
	),
);

if ( empty( $faqs ) ) {
	return;
}
?>
<section class="bl-home-section">
	<div class="bl-container">
		<h2><?php esc_html_e( 'FAQ', 'buildinglift-b2b' ); ?></h2>
		<div class="bl-faq-list">
			<?php foreach ( $faqs as $faq ) : ?>
				<article class="bl-faq-item">
					<h3><?php echo esc_html( $faq['q'] ); ?></h3>
					<p><?php echo esc_html( $faq['a'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
