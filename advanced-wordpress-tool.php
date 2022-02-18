<?php
/**
 * Advanced WP Toolbox
 *
 * @package     awtPackage
 * @author      Salih ÖNDER
 * @copyright   2020 Salih ÖNDER
 * @license     GPL-3.0
 *
 * @wordpress-plugin
 * Plugin Name: Advanced Wp Toolbox
 * Plugin URI:  https://www.salihonder.com.tr/pluginler/advanced-wp-toolbox/
 * Description: Cancel everything you don't need. Make WordPress more secure. Take care of all your transactions with a single plugin.
 * Version:     1.0.0
 * Author:      Salih ÖNDER
 * Author URI:  https://www.salihonder.com.tr
 * Text Domain: advanced-wordpress-toolbox
 * License:     GPL v3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'ADVANCED_WORDPRESS_TOOLBOX_VERSION', '1.0.1' );
define( 'ADVANCED_WORDPRESS_TOOLBOX_FILE', __FILE__ );
load_plugin_textdomain('advanced-wordpress-tool', false, dirname(plugin_basename(__FILE__)) . '/languages/');
function save_ADVANCED_WORDPRESS_TOOLBOX_version() {

	if ( get_option( 'ADVANCED_WORDPRESS_TOOLBOX_version' ) ) {
		update_option( 'ADVANCED_WORDPRESS_TOOLBOX_version', ADVANCED_WORDPRESS_TOOLBOX_VERSION );
	} else {
		add_option( 'ADVANCED_WORDPRESS_TOOLBOX_version', ADVANCED_WORDPRESS_TOOLBOX_VERSION );
	}

}
save_ADVANCED_WORDPRESS_TOOLBOX_version();


require plugin_dir_path( ADVANCED_WORDPRESS_TOOLBOX_FILE ) . 'inc/loader.php';
