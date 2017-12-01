<?php
/**
 * Class Shortcode_Binder_Document_List
 *
 * @package mkdo\cards_for_binder
 */

namespace mkdo\cards_for_binder;

/**
 * The Binder Document List Shortcode
 */
class Shortcode_Binder_Document_List {

	/**
	 * Constructor
	 */
	function __construct() {}

	/**
	 * Do Work
	 */
	public function run() {
		add_filter( 'mkdo_binder_shortcode_binder_document_list_display_types', array( $this, 'mkdo_binder_shortcode_binder_document_list_display_types' ), 10, 1 );
		add_action( 'mkdo_binder_shortcode_binder_document_list_render_views', array( $this, 'mkdo_binder_shortcode_binder_document_list_render_views' ), 10, 2 );
	}


	/**
	 * Add Tables to display type options.
	 *
	 * @param  array $types Array of types.
	 * @return array        Array of types
	 */
	public function mkdo_binder_shortcode_binder_document_list_display_types( $types ) {
		$types['card-list'] = esc_html__( 'Cards', 'binder' );
		$types['card-list-image'] = esc_html__( 'Cards with Image', 'binder' );
		$types['card-media-list'] = esc_html__( 'Media Cards', 'binder' );

		return $types;
	}

	/**
	 * View to display based on chosen display type.
	 *
	 * @param array $attr           Array of attributes.
	 * @param array $document_posts Array of document posts.
	 */
	public function mkdo_binder_shortcode_binder_document_list_render_views( $attr, $document_posts ) {

		// Render the table view.
		if ( 'card-list' === $attr['display_type'] ) {
			include Helper::render_view( 'view-binder-document-card-list' );
		}

		if ( 'card-list-image' === $attr['display_type'] ) {
			$attr['show_image'] = true;
			include Helper::render_view( 'view-binder-document-card-list' );
		}

		if ( 'card-media-list' === $attr['display_type'] ) {
			include Helper::render_view( 'view-binder-document-card-media-list' );
		}
	}
}
