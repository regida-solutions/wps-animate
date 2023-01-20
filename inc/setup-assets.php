<?php
/**
 * Setup plugin assets
 *
 * @package WPS_Animate
 */

declare( strict_types=1 );

namespace WPS\Animate\Inc\Assets;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Silence is golden.' );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\front_end_assets' );

/**
 * Enqueue scripts and styles for the client.
 */
function front_end_assets() {
	$script_deps_path    = WPS_ANIMATE_DIR_PATH . '/build/wps-animate.asset.php';
	$script_dependencies = file_exists( $script_deps_path ) ?
		include $script_deps_path :
		[
			'dependencies' => [],
			'version'      => WPS_ANIMATE_VERSION,
		];

	if ( file_exists( WPS_ANIMATE_DIR_PATH . '/build/wps-animate.js' ) ) {
		wp_register_script( 'wps-animate', WPS_ANIMATE_DIR_URL . '/build/wps-animate.js', $script_dependencies['dependencies'], $script_dependencies['version'], true );
		wp_enqueue_script( 'wps-animate' );
	}
}
