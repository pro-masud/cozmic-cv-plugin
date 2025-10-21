<?php
namespace Wowaddons\Admin;

defined( 'ABSPATH' ) || die();

class Enqueue { 

    public function __construct() {

        add_action( 'admin_enqueue_scripts', [ __CLASS__, 'admin_enqueue_scripts' ] );
         
    }
    
    public static function admin_enqueue_scripts( $hook ) {
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        wp_enqueue_style( 
            'wowaddons-framework',
            WOWADDONS_CSS_DIR_URL . '/libraries.min.css', 
            null,
            '1.0'
        );
        
        wp_enqueue_style(
            'wowaddons-font-awesome',
            WOWADDONS_ADMIN_CSS_DIR_URL . '/font-awesome.min.css',
            null,
            '1.0'
        );
        wp_enqueue_style(
            'wowaddons-admin',
            WOWADDONS_ADMIN_CSS_DIR_URL . '/admin.css',
            null,
            '1.0'
        );
        wp_enqueue_style(
            'wowaddons-dashboard',
            WOWADDONS_ADMIN_CSS_DIR_URL . '/dashboard.css',
            null,
            '1.0'
        );
        wp_enqueue_script(
            'wowaddons-libraries',
            WOWADDONS_JS_DIR_URL . '/libraries.min.js',
            [ 'jquery' ],
            '1.0',
            true
        );

        wp_enqueue_script(
            'wowaddons-admin',
            WOWADDONS_ADMIN_JS_DIR_URL . '/admin.js',
            [ 'jquery' ],
            '1.0',
            true
        );
        wp_enqueue_script(
            'wowaddons-dashboard',
            WOWADDONS_ADMIN_JS_DIR_URL . '/dashboard.js',
            [ 'jquery' ],
            '1.0',
            true
        );

    }
}
