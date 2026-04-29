<?php
/**
 * Featured products block.
 *
 * @package BuildingLift_B2B
 */

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

$query = new WP_Query(
	array(
		'post_type'      => 'product',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
	)
);

if ( ! $query->have_posts() ) {
	wp_reset_postdata();
	return;
}
?>
<section class="bl-home-section bl-home-featured">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Featured Products', 'buildinglift-b2b' ); ?></h2>
		<div class="bl-home-featured__grid">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<article <?php post_class( 'bl-card' ); ?>>
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium', array( 'loading' => 'lazy' ) ); ?>
						<?php endif; ?>
						<h3><?php the_title(); ?></h3>
					</a>
				</article>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php wp_reset_postdata(); ?>
