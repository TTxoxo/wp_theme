<?php
/**
 * Single post template.
 *
 * @package BuildingLift_B2B
 */

get_header();
while ( have_posts() ) : the_post();
?>
<main id="primary" class="site-main bl-container">
	<article <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<?php get_template_part( 'template-parts/blog/post', 'toc' ); ?>
	</article>
	<?php get_template_part( 'template-parts/blog/post', 'related-products' ); ?>
	<?php get_template_part( 'template-parts/blog/post', 'cta' ); ?>
</main>
<?php endwhile; get_footer();
