<?php
/**
 * Blog post card.
 *
 * @package BuildingLift_B2B
 */
?>
<article <?php post_class( 'bl-card' ); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26 ) ); ?></p>
</article>
