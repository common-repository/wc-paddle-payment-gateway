<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://divdojo.com
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Payment Gateway for Paddle on WooCommerce
 * Plugin URI:        https://divdojo.com/wc-paddle-payment-gateway
 * Description:       Paddle.com Payment Gateway Plugin for WooCommerce
 * Version:           1.0.3
 * Author:            DivDojo
 * Author URI:        https://divdojo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-paddle-payment-gateway
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PPGW_VERSION', '1.0.3' );

/**
 * Define plugin path and plugin url.
 */
define( 'PPGW_PATH', plugin_dir_path( __FILE__ ) );
define( 'PPGW_URL', plugin_dir_url( __FILE__ ) );
define( 'PPGW_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/dist/' );

/**
 * The code that runs during plugin activation.
 */
function ppgw_activate() {
	
}

/**
 * The code that runs during plugin deactivation.
 */
function ppgw_deactivate() {
	
}

register_activation_hook( __FILE__, 'ppgw_activate' );
register_deactivation_hook( __FILE__, 'ppgw_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function ppgw_run() {

	$plugin = new Ppgw_Plugin();

}
ppgw_run();
