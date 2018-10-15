<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/TJSeabury
 * @since             1.0.0
 * @package           Smsfaq
 *
 * @wordpress-plugin
 * Plugin Name:       SMS FAQ
 * Plugin URI:        https://github.com/TJSeabury/smsfaq
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Tyler Seabury
 * Author URI:        https://github.com/TJSeabury
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smsfaq
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smsfaq-activator.php
 */
function activate_smsfaq() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smsfaq-activator.php';
	Smsfaq_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smsfaq-deactivator.php
 */
function deactivate_smsfaq() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smsfaq-deactivator.php';
	Smsfaq_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smsfaq' );
register_deactivation_hook( __FILE__, 'deactivate_smsfaq' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smsfaq.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_smsfaq() {

	$plugin = new Smsfaq();
	$plugin->run();

}
run_smsfaq();
