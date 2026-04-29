<?php
/**
 * Site footer.
 *
 * @package BuildingLift_B2B
 */

$email         = buildinglift_b2b_get_option( 'email' );
$whatsapp      = buildinglift_b2b_get_option( 'whatsapp' );
$address       = buildinglift_b2b_get_option( 'address' );
$footer_contact = buildinglift_b2b_get_option( 'footer_contact' );
$groups        = array(
	'footer_products'     => esc_html__( 'Products', 'buildinglift-b2b' ),
	'footer_applications' => esc_html__( 'Applications', 'buildinglift-b2b' ),
	'footer_resources'    => esc_html__( 'Resources', 'buildinglift-b2b' ),
	'footer_company'      => esc_html__( 'Company', 'buildinglift-b2b' ),
);
?>
<footer class="bl-footer" role="contentinfo">
	<div class="bl-container">
		<div class="bl-footer__grid">
			<?php foreach ( $groups as $location => $title ) : ?>
				<div class="bl-footer__col">
					<h2><?php echo esc_html( $title ); ?></h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => $location,
							'fallback_cb'    => false,
							'container'      => false,
							'menu_class'     => 'bl-footer-menu',
						)
					);
					?>
				</div>
			<?php endforeach; ?>
			<div class="bl-footer__col">
				<h2><?php esc_html_e( 'Contact', 'buildinglift-b2b' ); ?></h2>
				<?php if ( '' !== $email ) : ?><p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p><?php endif; ?>
				<?php if ( '' !== $whatsapp ) : ?><p><a href="https://wa.me/<?php echo esc_attr( preg_replace( '/\D+/', '', $whatsapp ) ); ?>"><?php echo esc_html( $whatsapp ); ?></a></p><?php endif; ?>
				<?php if ( '' !== $address ) : ?><p><?php echo esc_html( $address ); ?></p><?php endif; ?>
				<?php if ( '' !== $footer_contact ) : ?><p><?php echo esc_html( $footer_contact ); ?></p><?php endif; ?>
			</div>
		</div>
		<p class="bl-footer__copyright">© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>
