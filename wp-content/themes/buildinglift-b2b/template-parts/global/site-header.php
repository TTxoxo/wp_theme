<?php
/**
 * Site header.
 *
 * @package BuildingLift_B2B
 */

$cta_url    = buildinglift_b2b_get_option( 'request_quote_url', home_url( '/contact-us/' ) );
$cta_text   = buildinglift_b2b_get_option( 'header_cta_text', esc_html__( 'Request Quote', 'buildinglift-b2b' ) );
$is_sticky  = buildinglift_b2b_get_option( 'enable_sticky', false );
$header_cls = $is_sticky ? ' bl-header--sticky' : '';
?>
<header class="bl-header<?php echo esc_attr( $header_cls ); ?>" role="banner">
	<div class="bl-container bl-header__inner">
		<div class="bl-header__branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="bl-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>
		<button class="bl-menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'buildinglift-b2b' ); ?>" aria-expanded="false">
			<span></span><span></span><span></span>
		</button>
		<nav class="bl-header__nav" aria-label="<?php esc_attr_e( 'Header Menu', 'buildinglift-b2b' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header_menu',
					'fallback_cb'    => 'buildinglift_b2b_header_menu_fallback',
					'container'      => false,
					'menu_class'     => 'bl-header-menu',
				)
			);
			?>
		</nav>
		<?php if ( '' !== $cta_url && '' !== $cta_text ) : ?>
			<a class="bl-header__cta" href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_text ); ?></a>
		<?php endif; ?>
	</div>
</header>
