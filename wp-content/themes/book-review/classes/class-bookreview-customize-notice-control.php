<?php
/**
 * Customize API: Book_Review_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Book_Review
 * @since Book Review 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Book Review 1.0
 *
 * @see WP_Customize_Control
 */
class Book_Review_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Book Review 1.0
	 *
	 * @var string
	 */
	public $type = 'bookreview-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Book Review 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'bookreview' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/bookreview/#dark-mode-support', 'bookreview' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'bookreview' ); ?>
			</a></p>
		</div>
		<?php
	}
}
