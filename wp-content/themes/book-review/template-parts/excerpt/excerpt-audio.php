<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Book_Review
 * @since Book Review 1.0
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	bookreview_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	bookreview_print_first_instance_of_block( 'core/embed', $content );
} else {
	bookreview_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
