<?php
/**
 * Home product categories.
 *
 * @package BuildingLift_B2B
 */

$categories = array(
	'Suspended Working Platform',
	'Suspended Platform Spare Parts',
	'Construction Hoist Spare Parts',
	'Glass Lifting Machine',
	'Electric Scissor Lift',
	'Construction Mini Crane',
);
?>
<section class="bl-home-section bl-home-cats">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Product Categories', 'buildinglift-b2b' ); ?></h2>
		<div class="bl-home-cats__grid">
			<?php foreach ( $categories as $name ) : ?>
				<article class="bl-card">
					<h3><?php echo esc_html( $name ); ?></h3>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
