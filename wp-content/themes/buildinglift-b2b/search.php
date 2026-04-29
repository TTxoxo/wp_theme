<?php
/**
 * Search template.
 *
 * @package BuildingLift_B2B
 */

get_header();
$query = get_search_query();
?>
<main id="primary" class="site-main bl-container">
	<h1><?php printf( esc_html__( 'Search Results for: %s', 'buildinglift-b2b' ), esc_html( $query ) ); ?></h1>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="bl-search-field"><?php esc_html_e( 'Search for:', 'buildinglift-b2b' ); ?></label>
		<input id="bl-search-field" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
		<button type="submit"><?php esc_html_e( 'Search', 'buildinglift-b2b' ); ?></button>
	</form>
	<?php if ( have_posts() ) : ?>
		<ul>
			<?php while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	<?php else : ?>
		<p><?php esc_html_e( 'No results found. Try another keyword or explore product categories below.', 'buildinglift-b2b' ); ?></p>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/home/product', 'categories' ); ?>
	<?php get_template_part( 'template-parts/global/cta', 'strip' ); ?>
</main>
<?php get_footer();
