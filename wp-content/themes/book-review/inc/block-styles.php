<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Book_Review
 * @since Book Review 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Book Review 1.0
	 *
	 * @return void
	 */
	function bookreview_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bookreview-columns-overlap',
				'label' => esc_html__( 'Overlap', 'bookreview' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'bookreview-border',
				'label' => esc_html__( 'Borders', 'bookreview' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'bookreview-border',
				'label' => esc_html__( 'Borders', 'bookreview' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'bookreview-border',
				'label' => esc_html__( 'Borders', 'bookreview' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'bookreview-image-frame',
				'label' => esc_html__( 'Frame', 'bookreview' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'bookreview-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'bookreview' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'bookreview-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'bookreview' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'bookreview-border',
				'label' => esc_html__( 'Borders', 'bookreview' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'bookreview-separator-thick',
				'label' => esc_html__( 'Thick', 'bookreview' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'bookreview-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'bookreview' ),
			)
		);
	}
	add_action( 'init', 'bookreview_register_block_styles' );
}
