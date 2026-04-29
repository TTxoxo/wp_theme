<?php
/**
 * Front page template.
 *
 * @package BuildingLift_B2B
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php get_template_part( 'template-parts/home/hero', 'carousel' ); ?>
	<?php get_template_part( 'template-parts/home/product', 'categories' ); ?>
	<?php get_template_part( 'template-parts/home/featured', 'products' ); ?>
	<?php get_template_part( 'template-parts/home/about', 'why' ); ?>
	<?php get_template_part( 'template-parts/home/applications' ); ?>
	<?php get_template_part( 'template-parts/home/solutions', 'support' ); ?>
	<?php get_template_part( 'template-parts/home/spare-parts', 'support' ); ?>
	<?php get_template_part( 'template-parts/home/resources' ); ?>
	<?php get_template_part( 'template-parts/home/home', 'faq' ); ?>
</main>
<?php
get_footer();
