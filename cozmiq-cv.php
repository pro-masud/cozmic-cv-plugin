<?php
/*
Plugin Name: Cozmiq CV
Plugin URI: https://cozmiq.com/plugins/cozmiq-cv/
Description: Plugin to contain short codes and custom post types of the Cozmiq theme.
Author: Cozmiq
Author URI: https://cozmiq.com
Version: 1.0.0
Text Domain: cozmiq-cv
Developer: Cozmiq
Developer URI: https://cozmiq.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: shortcodes, custom post types, cozmiq, cozmiq
Requires at least: 5.0
Requires PHP: 7.0
*/


/**
 * If this file is called directly, abort.
 * @package cozmiq
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Plugin directory path
 * @package cozmiq
 * @since 1.0.0
 */
define( 'COZMIQ_CV_ROOT_PATH', plugin_dir_path( __FILE__ ) );
define( 'COZMIQ_CV_ROOT_URL', plugin_dir_url( __FILE__ ) );
define( 'COZMIQ_CV_SELF_PATH', 'cozmiq-cv/cozmiq-cv.php' );
define( 'COZMIQ_CV_VERSION', '2.0.1' );
define( 'COZMIQ_CV_INC', COZMIQ_CV_ROOT_PATH .'/inc');
define( 'COZMIQ_CV_LIB', COZMIQ_CV_ROOT_PATH .'/lib');
define( 'COZMIQ_CV_ELEMENTOR', COZMIQ_CV_ROOT_PATH .'/elementor');
define( 'COZMIQ_CV_DEMO_IMPORT', COZMIQ_CV_ROOT_PATH .'/demo-import');
define( 'COZMIQ_CV_ADMIN', COZMIQ_CV_ROOT_PATH .'/admin');
define( 'COZMIQ_CV_ADMIN_ASSETS', COZMIQ_CV_ROOT_URL .'admin/assets');
define( 'COZMIQ_CV_WP_WIDGETS', COZMIQ_CV_ROOT_PATH .'/wp-widgets');
define( 'COZMIQ_CV_ASSETS', COZMIQ_CV_ROOT_URL .'assets/');
define( 'COZMIQ_CV_CSS', COZMIQ_CV_ASSETS .'css');
define( 'COZMIQ_CV_JS', COZMIQ_CV_ASSETS .'js');
define( 'COZMIQ_CV_IMG', COZMIQ_CV_ASSETS .'img');


/**
 * Load additional helpers functions
 * @package cozmiq
 * @since 1.0.0
 */
if (!function_exists('cozmiq_cv')){
	require_once COZMIQ_CV_INC .'/theme-core-helper-functions.php';
	if (!function_exists('cozmiq_cv')){
		function cozmiq_cv(){
			return class_exists('Cozmiq_CV_Helper_Functions') ? new Cozmiq_CV_Helper_Functions() : false;
		}
	}
}
//ob flash
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


/**
 * Load Codestar Framework Functions
 * @package cozmiq
 * @since 1.0.0
 */
if ( !cozmiq_cv()->is_cozmiq_active()) {
	if ( file_exists( COZMIQ_CV_ROOT_PATH . '/inc/csf-functions.php' ) ) {
		require_once COZMIQ_CV_ROOT_PATH . '/inc/csf-functions.php';
	}
}


/**
 * Core Plugin Init
 * @package cozmiq
 * @since 1.0.0
 */
if ( file_exists( COZMIQ_CV_ROOT_PATH . '/inc/theme-core-init.php' ) ) {
	require_once COZMIQ_CV_ROOT_PATH . '/inc/theme-core-init.php';
}


/**
 * Theme builder
 */
if ( file_exists( COZMIQ_CV_ROOT_PATH . '/theme-builder/hugebinary-header-footer.php' ) ) {
    require_once COZMIQ_CV_ROOT_PATH . '/theme-builder/hugebinary-header-footer.php';
}

// Elementor Addon Customize Here
if ( file_exists( COZMIQ_CV_ROOT_PATH . '/inc/widget-utility.php' ) ) {
    require_once COZMIQ_CV_ROOT_PATH . '/inc/widget-utility.php';
}