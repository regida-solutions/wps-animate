<?php
/**
 * Plugin Name:     WPS Animate
 * Plugin URI:      https://wpshapers.com
 * Description:     Add CSS animations to your content
 * Author:          WPShapers
 * Author URI:      https://wpshapers.com
 * Text Domain:     wps-animate
 * Version:         1.0.3
 *
 * @package WPS_Animate
 */

declare( strict_types=1 );

namespace WPS\Animate;

define( 'WPS_ANIMATE_VERSION', '1.0.3' );
define( 'WPS_ANIMATE_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'WPS_ANIMATE_DIR_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'WPS_ANIMATE_UPDATE_URL', 'https://zsoltrevay.com/packages' );
define( 'WPS_ANIMATE_UPDATE_FOLDER', 'wps-animate' );
define( 'WPS_ANIMATE_PLUGIN_SLUG', 'wps-animate' );

require_once WPS_ANIMATE_DIR_PATH . '/inc/setup-updater.php';
require_once WPS_ANIMATE_DIR_PATH . '/inc/setup-assets.php';
