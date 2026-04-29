<?php
/**
 * 404 template.
 *
 * @package BuildingLift_B2B
 */

get_header();
?>
<main id="primary" class="site-main bl-container">
	<h1><?php esc_html_e( 'Page Not Found', 'buildinglift-b2b' ); ?></h1>
	<p><?php esc_html_e( 'The page you are looking for does not exist.', 'buildinglift-b2b' ); ?></p>
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'buildinglift-b2b' ); ?></a></p>
	<p><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Go to Product Center', 'buildinglift-b2b' ); ?></a></p>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="bl-404-search"><?php esc_html_e( 'Search for:', 'buildinglift-b2b' ); ?></label>
		<input id="bl-404-search" type="search" name="s" value="">
		<button type="submit"><?php esc_html_e( 'Search', 'buildinglift-b2b' ); ?></button>
	</form>
	<?php get_template_part( 'template-parts/home/product', 'categories' ); ?>
	<?php get_template_part( 'template-parts/global/cta', 'strip' ); ?>
</main>
<?php get_footer();
