<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://mattsplugins.com/plugins
 * @since      1.0.0
 *
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 * @author     Matt Jacob <matt@gmail.com>
 */
class Rocket_Books_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {


		//unregister CPT
		unregister_post_type( 'book' );

		//flush permalinks
		flush_rewrite_rules();

	}

}
