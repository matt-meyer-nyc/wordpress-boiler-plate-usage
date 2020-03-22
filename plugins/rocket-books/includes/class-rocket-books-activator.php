<?php

/**
 * Fired during plugin activation
 *
 * @link       https://mattsplugins.com/plugins
 * @since      1.0.0
 *
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 * @author     Matt Jacob <matt@gmail.com>
 */
class Rocket_Books_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		// get file to be able to call methods in Rocket_Books_Post_Types below (i.e. ROCKET BOOKS NAME, ROCKET BOOKS VERSION)
		require_once ROCKET_BOOKS_BASE_DIR . 'includes/class-rocket-books-post-types.php';

		//register CPT
		$plugin_post_type = new Rocket_Books_Post_Types('ROCKET_BOOKS_NAME', 'ROCKET_BOOKS_VERSION');

		$plugin_post_type->init();


		//flush permalinks
		flush_rewrite_rules();

	}

}
