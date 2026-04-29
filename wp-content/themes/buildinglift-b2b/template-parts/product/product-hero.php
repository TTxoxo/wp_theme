<?php
/**
 * Product hero with breadcrumb.
 *
 * @package BuildingLift_B2B
 */
?>
<section class="bl-product-hero bl-home-section">
	<div class="bl-container">
		<?php woocommerce_breadcrumb(); ?>
		<div class="bl-product-hero__layout">
			<?php wc_get_template( 'single-product/product-image.php' ); ?>
			<?php wc_get_template( 'single-product/product-summary.php' ); ?>
		</div>
	</div>
</section>
