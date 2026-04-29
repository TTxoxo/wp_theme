<?php
/**
 * Blog home template.
 *
 * @package BuildingLift_B2B
 */

get_header();
?>
<main id="primary" class="site-main bl-container">
	<h1><?php single_post_title(); ?></h1>
	<?php if ( have_posts() ) : ?>
		<div class="bl-home-featured__grid">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/blog/post', 'card' ); ?>
			<?php endwhile; ?>
		</div>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts found.', 'buildinglift-b2b' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
