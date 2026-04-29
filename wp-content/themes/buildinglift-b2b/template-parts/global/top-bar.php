<?php
/**
 * Top bar.
 *
 * @package BuildingLift_B2B
 */

$email    = buildinglift_b2b_get_option( 'email' );
$whatsapp = buildinglift_b2b_get_option( 'whatsapp' );
$note     = esc_html__( 'Industrial access equipment supplier for global projects.', 'buildinglift-b2b' );

if ( '' === $email && '' === $whatsapp && '' === $note ) {
	return;
}
?>
<div class="bl-top-bar">
	<div class="bl-container bl-top-bar__inner">
		<div class="bl-top-bar__contact">
			<?php if ( '' !== $email ) : ?>
				<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
			<?php endif; ?>
			<?php if ( '' !== $whatsapp ) : ?>
				<a href="https://wa.me/<?php echo esc_attr( preg_replace( '/\D+/', '', $whatsapp ) ); ?>"><?php echo esc_html( $whatsapp ); ?></a>
			<?php endif; ?>
		</div>
		<p class="bl-top-bar__note"><?php echo esc_html( $note ); ?></p>
	</div>
</div>
