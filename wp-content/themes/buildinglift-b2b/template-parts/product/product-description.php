<?php
/**
 * Product description.
 *
 * @package BuildingLift_B2B
 */

$content = get_the_content();
if ( '' === trim( wp_strip_all_tags( $content ) ) ) {
	return;
}
?>
<section class="bl-home-section">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Product Description', 'buildinglift-b2b' ); ?></h2>
		<div class="entry-content"><?php the_content(); ?></div>
	</div>
</section>
