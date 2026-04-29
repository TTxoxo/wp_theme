<?php
/**
 * Post TOC + content rendering.
 *
 * @package BuildingLift_B2B
 */

$content = get_the_content();
preg_match_all( '/<h([2-3])([^>]*)>(.*?)<\/h[2-3]>/is', $content, $matches, PREG_SET_ORDER );

$updated = $content;
if ( count( $matches ) >= 2 ) {
	echo '<nav class="bl-post-toc" aria-label="' . esc_attr__( 'Table of Contents', 'buildinglift-b2b' ) . '">';
	echo '<h2>' . esc_html__( 'Contents', 'buildinglift-b2b' ) . '</h2><ol>';
	foreach ( $matches as $index => $match ) {
		$text = wp_strip_all_tags( $match[3] );
		$id   = 'toc-' . (string) $index;
		echo '<li class="level-' . esc_attr( $match[1] ) . '"><a href="#' . esc_attr( $id ) . '">' . esc_html( $text ) . '</a></li>';
		$updated = preg_replace( '/<h' . $match[1] . $match[2] . '>/i', '<h' . $match[1] . $match[2] . ' id="' . $id . '">', $updated, 1 );
	}
	echo '</ol></nav>';
}

echo '<div class="bl-post-content">' . wp_kses_post( apply_filters( 'the_content', $updated ) ) . '</div>';
