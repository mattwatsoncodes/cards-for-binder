<?php
/**
 * Cards for Binder
 *
 * @link              https://github.com/mkdo/cards_for_binder
 * @package           mkdo\cards_for_binder
 *
 * Plugin Name:       Cards for Binder
 * Plugin URI:        https://github.com/mkdo/cards_for_binder
 * Description:       Card presentation layer for the Binder Document Management System (DMS) for WordPress.
 * Version:           0.1.0
 * Author:            Make Do <hello@makedo.net>
 * Author URI:        https://makedo.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cards-for-binder
 * Domain Path:       /languages
 */

// Abort if this file is called directly.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Constants.
define( 'MKDO_CARDS_FOR_BINDER_ROOT', __FILE__ );
define( 'MKDO_CARDS_FOR_BINDER_NAME', 'Cards for Binder' );
define( 'MKDO_CARDS_FOR_BINDER_PREFIX', 'mkdo_cards_for_binder' );

// Classes.
require_once 'php/class-helper.php';
require_once 'php/class-controller-assets.php';
require_once 'php/class-controller-main.php';
require_once 'php/class-notices-admin.php';
require_once 'php/class-shortcode-binder-document.php';
require_once 'php/class-shortcode-binder-document-list.php';

// Namespaces.
use mkdo\cards_for_binder\Helper;
use mkdo\cards_for_binder\Controller_Assets;
use mkdo\cards_for_binder\Controller_Main;
use mkdo\cards_for_binder\Notices_Admin;
use mkdo\cards_for_binder\Shortcode_Binder_Document;
use mkdo\cards_for_binder\Shortcode_Binder_Document_List;

// Instances.
$controller_assets  	       = new Controller_Assets();
$notices_admin  	           = new Notices_Admin();
$shorcode_binder_document      = new Shortcode_Binder_Document();
$shorcode_binder_document_list = new Shortcode_Binder_Document_List();
$controller_main               = new Controller_Main(
	$controller_assets,
	$notices_admin,
	$shorcode_binder_document,
	$shorcode_binder_document_list
);

// Go.
$controller_main->run();
