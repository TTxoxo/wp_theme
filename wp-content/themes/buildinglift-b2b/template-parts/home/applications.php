<?php
/**
 * Applications section.
 *
 * @package BuildingLift_B2B
 */

$applications = array(
	'Building Facade Work',
	'Window Cleaning',
	'Exterior Wall Maintenance',
	'Glass Curtain Wall Installation',
	'Indoor Maintenance',
	'Construction Site Lifting',
);
?>
<section class="bl-home-section">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Applications', 'buildinglift-b2b' ); ?></h2>
		<ul class="bl-list-grid">
			<?php foreach ( $applications as $item ) : ?>
				<li><?php echo esc_html( $item ); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
