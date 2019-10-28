<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://valorouswebdesign.com
 * @since      1.0.0
 *
 * @package    Vc_Basic_Addons
 * @subpackage Vc_Basic_Addons/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vc_Basic_Addons
 * @subpackage Vc_Basic_Addons/includes
 * @author     Valorous Circle <support@valorouscircle.com>
 */
class Vc_Basic_Addons_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vc-basic-addons',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
