<?php 

/*
    Plugin name: Iago Task for Raketech
    Description: A truly amazing plugin.
    Version: 1.0
    Author: Iago Augusto de Deus
    Author URI: http://iagoaugusto.xyz/
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-iago-plugin.php';
require_once 'includes/class-iago-plugin-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-iago-plugin-admin-api.php';
require_once 'includes/lib/class-iago-plugin-post-type.php';
require_once 'includes/lib/class-iago-plugin-taxonomy.php';

/**
 * Returns the main instance of iago-plugin to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object iago-plugin
 */
function iago-plugin() {
	$instance = iago-plugin::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = iago-plugin_Settings::instance( $instance );
	}

	return $instance;
}

iago-plugin();
