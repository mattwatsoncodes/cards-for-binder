<?php
/**
 * Class Controller_Main
 *
 * @since	0.1.0
 *
 * @package mkdo\cards_for_binder
 */

namespace mkdo\cards_for_binder;

/**
 * The main loader for this plugin
 */
class Controller_Main {

	/**
	 * Enqueue the public and admin assets.
	 *
	 * @var 	object
	 * @access	private
	 * @since	0.1.0
	 */
	private $controller_assets;

	/**
	 * Notices on the admin screens.
	 *
	 * @var 	object
	 * @access	private
	 * @since	0.1.0
	 */
	private $notices_admin;

	/**
	 * Extend the binder document views.
	 *
	 * @var 	object
	 * @access	private
	 * @since	0.1.0
	 */
	private $shorcode_binder_document;

	/**
	 * Extend the binder document list views.
	 *
	 * @var 	object
	 * @access	private
	 * @since	0.1.0
	 */
	private $shorcode_binder_document_list;

	/**
	 * Constructor.
	 *
	 * @param Controller_Assets              $controller_assets              Enqueue the public and admin assets.
	 * @param Notices_Admin                  $notices_admin                  Notices on the admin screens.
	 * @param Shortcode_Binder_Document      $shorcode_binder_document       Extend the binder document views.
	 * @param Shortcode_Binder_Document_List $shorcode_binder_document_list  Extend the binder document list views.
	 *
	 * @since 0.1.0
	 */
	public function __construct(
		Controller_Assets $controller_assets,
		Notices_Admin $notices_admin,
		Shortcode_Binder_Document $shorcode_binder_document,
		Shortcode_Binder_Document_List $shorcode_binder_document_list
	) {
		$this->controller_assets             = $controller_assets;
		$this->notices_admin                 = $notices_admin;
		$this->shorcode_binder_document      = $shorcode_binder_document;
		$this->shorcode_binder_document_list = $shorcode_binder_document_list;
	}

	/**
	 * Go.
	 *
	 * @since		0.1.0
	 */
	public function run() {
		load_plugin_textdomain(
			'cards-for-binder',
			false,
			MKDO_CARDS_FOR_BINDER_ROOT . '\languages'
		);

		$this->controller_assets->run();
		$this->notices_admin->run();
		$this->shorcode_binder_document->run();
		$this->shorcode_binder_document_list->run();
	}
}
