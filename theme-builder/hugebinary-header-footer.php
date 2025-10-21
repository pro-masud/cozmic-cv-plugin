<?php
/**
 * @package cozmiq header footer builder
 */

// define the main file 
define( 'COZMIQ_HEAD_FILE_', __FILE__ );
define( 'PLUGIN_DIR', dirname(__FILE__).'/' );  

// controller page
include 'controller.php';

// load of controller files
// after theme switch
add_action( 'after_switch_theme', 'cozmiq_head_active' );
// when plugin active
register_activation_hook(__FILE__, 'cozmiq_head_active');


if ( ! function_exists('cozmiq_head_active') ) {
    function cozmiq_head_active(){
        $cpt_support = get_option( 'elementor_cpt_support', [ 'page', 'post', 'portfolio' ] );
        foreach ( $cpt_support as $cpt_slug ) {
            add_post_type_support( $cpt_slug, 'elementor' );
        }
        // add custom posttype
        if( !in_array('hugebinary-builder', $cpt_support) ){
            add_post_type_support( 'hugebinary-builder', 'elementor' );
            $cpt_support[] = 'hugebinary-builder';
            update_option('elementor_cpt_support', $cpt_support);
            flush_rewrite_rules();
        }

    }
}

if ( ! function_exists('cozmiq_kses_html') ) {
    function cozmiq_kses_html( $content = '') {
        return $content;
    }
}

// load plugin
add_action( 'plugins_loaded', function(){
	// load plugin instance
    \cozmiqhead_\Dtdr_Controller::instance()->load();

    // load include
    \cozmiqhead_\Includes\Dtdr_Load::_instance()->_init();

}, 10); 
require PLUGIN_DIR.'includes/templates/init.php';