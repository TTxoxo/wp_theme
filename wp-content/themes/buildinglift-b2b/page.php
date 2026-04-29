<?php
/**
 * Page template.
 *
 * @package BuildingLift_B2B
 */

get_header();

while ( have_posts() ) :
	the_post();
	$slug = get_post_field( 'post_name', get_the_ID() );
?>
<main id="primary" class="site-main bl-container bl-page">
	<article <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<div class="entry-content"><?php the_content(); ?></div>
	</article>

	<?php if ( 'contact-us' === $slug ) : ?>
		<section class="bl-home-section"><h2><?php esc_html_e( 'Contact BuildingLift', 'buildinglift-b2b' ); ?></h2><?php get_template_part( 'template-parts/global/cta', 'strip' ); ?></section>
	<?php endif; ?>

	<?php if ( 'about-us' === $slug ) : ?>
		<section class="bl-home-section"><h2><?php esc_html_e( 'Explore Product Categories', 'buildinglift-b2b' ); ?></h2><?php get_template_part( 'template-parts/home/product', 'categories' ); ?></section>
		<section class="bl-home-section"><h2><?php esc_html_e( 'Why Buyers Trust BuildingLift', 'buildinglift-b2b' ); ?></h2><p><?php esc_html_e( 'Industrial-focused communication, practical product support, and clear project response process.', 'buildinglift-b2b' ); ?></p></section>
	<?php endif; ?>

	<?php if ( 'solutions' === $slug ) : ?>
		<?php get_template_part( 'template-parts/home/applications' ); ?>
		<?php get_template_part( 'template-parts/home/product', 'categories' ); ?>
	<?php endif; ?>
</main>
<?php
endwhile;
get_footer();
