<?php
/**
 * Product specifications table.
 *
 * @package BuildingLift_B2B
 */

global $product;

if ( ! $product instanceof WC_Product ) {
	return;
}

$attributes = $product->get_attributes();
if ( empty( $attributes ) ) {
	return;
}
?>
<section class="bl-home-section bl-product-specs">
	<div class="bl-container">
		<h2><?php esc_html_e( 'Key Specifications', 'buildinglift-b2b' ); ?></h2>
		<div class="bl-table-wrap">
			<table>
				<tbody>
				<?php foreach ( $attributes as $attribute ) : ?>
					<tr>
						<th><?php echo esc_html( wc_attribute_label( $attribute->get_name() ) ); ?></th>
						<td><?php echo wp_kses_post( wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) ) ? esc_html( implode( ', ', wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) ) ) ) : esc_html( implode( ', ', $attribute->get_options() ) ) ); ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
