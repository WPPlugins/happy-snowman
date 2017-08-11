<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.wpmaniax.com
 * @since             1.0.0
 * @package           Happy_Snowman
 *
 * @wordpress-plugin
 * Plugin Name:       Happy Snowman
 * Plugin URI:        http://www.wpmaniax.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.1
 * Author:            WP Maniax
 * Author URI:        http://www.wpmaniax.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       happy-snowman
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-happy-snowman-activator.php
 */
function activate_happy_snowman() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-happy-snowman-activator.php';
	Happy_Snowman_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-happy-snowman-deactivator.php
 */
function deactivate_happy_snowman() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-happy-snowman-deactivator.php';
	Happy_Snowman_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_happy_snowman' );
register_deactivation_hook( __FILE__, 'deactivate_happy_snowman' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-happy-snowman.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_happy_snowman() {

	$plugin = new Happy_Snowman();
	$plugin->run();

}
run_happy_snowman();
