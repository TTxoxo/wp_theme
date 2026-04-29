<?php
/**
 * Home hero carousel.
 *
 * @package BuildingLift_B2B
 */

$slides = array(
	array(
		'title'    => 'Suspended Working Platform Manufacturer for Construction and Building Maintenance',
		'subtitle' => 'BuildingLift supplies electric suspended platforms, ZLP suspended platforms, spare parts, glass lifting machines, mini cranes, and scissor lifts for construction and maintenance projects.',
		'image'    => get_stylesheet_directory_uri() . '/assets/images/hero-1.jpg',
	),
	array(
		'title'    => esc_html__( 'Reliable Access Equipment for Facade and Glass Work', 'buildinglift-b2b' ),
		'subtitle' => esc_html__( 'Built for demanding industrial lifting and maintenance applications.', 'buildinglift-b2b' ),
		'image'    => get_stylesheet_directory_uri() . '/assets/images/hero-2.jpg',
	),
	array(
		'title'    => esc_html__( 'Spare Parts and Safety Support for Project Continuity', 'buildinglift-b2b' ),
		'subtitle' => esc_html__( 'Fast-response parts matching and technical support for global buyers.', 'buildinglift-b2b' ),
		'image'    => get_stylesheet_directory_uri() . '/assets/images/hero-3.jpg',
	),
);

$slides = array_slice( $slides, 0, 3 );
?>
<section class="bl-home-hero" aria-label="<?php esc_attr_e( 'Hero Banner', 'buildinglift-b2b' ); ?>">
	<div class="bl-home-hero__track" data-hero-track>
		<?php foreach ( $slides as $index => $slide ) : ?>
			<article class="bl-home-hero__slide<?php echo 0 === $index ? ' is-active' : ''; ?>">
				<div class="bl-container bl-home-hero__content">
					<?php if ( 0 === $index ) : ?>
						<h1><?php echo esc_html( $slide['title'] ); ?></h1>
					<?php else : ?>
						<p class="bl-home-hero__title"><?php echo esc_html( $slide['title'] ); ?></p>
					<?php endif; ?>
					<p><?php echo esc_html( $slide['subtitle'] ); ?></p>
				</div>
				<div class="bl-home-hero__bg" style="background-image:url('<?php echo esc_url( $slide['image'] ); ?>');" role="img" aria-label="<?php echo esc_attr( $slide['title'] ); ?>"></div>
			</article>
		<?php endforeach; ?>
	</div>
	<button class="bl-hero-prev" aria-label="<?php esc_attr_e( 'Previous slide', 'buildinglift-b2b' ); ?>">‹</button>
	<button class="bl-hero-next" aria-label="<?php esc_attr_e( 'Next slide', 'buildinglift-b2b' ); ?>">›</button>
</section>
