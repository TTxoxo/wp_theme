<?php
/**
 * Site header wrapper.
 *
 * @package BuildingLift_B2B
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part( 'template-parts/global/top', 'bar' ); ?>
<?php get_template_part( 'template-parts/global/site', 'header' ); ?>
