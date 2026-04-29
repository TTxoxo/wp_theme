<?php
/**
 * Related internal links.
 *
 * @package BuildingLift_B2B
 */

$cats = get_the_terms( get_the_ID(), 'product_cat' );
if ( ! $cats || is_wp_error( $cats ) ) {
	return;
}
?>
<section class="bl-home-section">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Related Internal Links', 'buildinglift-b2b' ); ?></h2>
		<ul class="bl-list-grid">
			<?php foreach ( $cats as $cat ) : ?>
				<li><a href="<?php echo esc_url( get_term_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
