<?php
/**
 * Product image and gallery.
 *
 * @package BuildingLift_B2B
 */

defined( 'ABSPATH' ) || exit;

global $product;

$main_id = $product->get_image_id();
$gallery_ids = $product->get_gallery_image_ids();
$title = get_the_title();

if ( ! $main_id && empty( $gallery_ids ) ) {
	return;
}
?>
<div class="bl-product-hero__media">
	<?php if ( $main_id ) :
		$alt = get_post_meta( $main_id, '_wp_attachment_image_alt', true );
		$alt = '' !== trim( $alt ) ? $alt : $title;
		echo wp_get_attachment_image( $main_id, 'large', false, array( 'alt' => esc_attr( $alt ), 'loading' => 'eager' ) );
	endif; ?>
	<?php if ( ! empty( $gallery_ids ) ) : ?>
		<div class="bl-product-hero__gallery">
			<?php foreach ( $gallery_ids as $gallery_id ) :
				$g_alt = get_post_meta( $gallery_id, '_wp_attachment_image_alt', true );
				$g_alt = '' !== trim( $g_alt ) ? $g_alt : $title;
				echo wp_get_attachment_image( $gallery_id, 'thumbnail', false, array( 'alt' => esc_attr( $g_alt ), 'loading' => 'lazy' ) );
			endforeach; ?>
		</div>
	<?php endif; ?>
</div>
