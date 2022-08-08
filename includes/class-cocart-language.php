<?php
/**
 * CoCart - Language
 *
 * @author  Sébastien Dumont
 * @package CoCart\Language
 * @since   1.0.0
 * @license GPL-2.0+
 */

namespace CoCart\Language;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Package {

	/**
	 * Package Version
	 *
	 * @access public
	 *
	 * @static
	 *
	 * @var string
	 */
	public static $version = '1.0.0';

	/**
	 * Initiate Package.
	 *
	 * @access public
	 * @static
	 */
	public static function init() {
		self::include_modules();
	}

	/**
	 * Return the name of the package.
	 *
	 * @access public
	 * @static
	 * @return string
	 */
	public static function get_name() {
		return 'CoCart Language';
	} // END get_name()

	/**
	 * Return the version of the package.
	 *
	 * @access public
	 * @static
	 * @return string
	 */
	public static function get_version() {
		return self::$version;
	} // END get_version()

	/**
	 * Return the path to the package.
	 *
	 * @access public
	 * @static
	 * @return string
	 */
	public static function get_path() {
		return dirname( __DIR__ );
	} // END get_path()

	/**
	 * Load support for extension language.
	 *
	 * @access public
	 * @static
	 */
	public static function include_modules() {
		include_once dirname( __FILE__ ) . '/modules/class-cocart-language-wpml.php'; // WPML.
	} // END include_modules()

} // END class.
