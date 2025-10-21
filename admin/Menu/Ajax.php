<?php 
namespace Wowaddons\Admin\Menu;
use \Wowaddons\Helpers\Utils as Utils;

// use \Wowaddons\Admin\WidgetsMap\General as General;

use \Wowaddons\Admin\WidgetsMap\Basic as Basic;
use \Wowaddons\Admin\WidgetsMap\Advanced as Advanced;
use \Wowaddons\Admin\WidgetsMap\Form as Form;
use \Wowaddons\Admin\WidgetsMap\Site as Site;
use \Wowaddons\Admin\WidgetsMap\Woo as Woo;

defined( 'ABSPATH' ) || exit;

class Ajax{
    public function __construct() {
        add_action( 'wp_ajax_wowaddons_admin_action', [$this, 'admin'] );
        add_action( 'init', [$this, 'admin_init'] );
    }
    public function admin() {
        if(!current_user_can('edit_theme_options')){
            wp_die(esc_html__('Access denied.', 'wowaddons'));
        } 
        Utils::update_option('wowaddons_options', 'widget_list', $_POST['widget_list']);
        Utils::update_option('wowaddons_options', 'mailchimp_api', $_POST['mailchimp_api']);
        wp_die();
    }

    public function admin_init() {
        // $default_widgets = General::default_widgets(); 
        $all_widgets = array_merge(
            Basic::default_widgets(), 
            Advanced::default_widgets(), 
            Form::default_widgets(), 
            Site::default_widgets(), 
            Woo::default_widgets()
        );
        $data = get_option('wowaddons_options');
        if(isset($data) && is_array($data['widget_list'])){
            return;
        }
        Utils::update_option('wowaddons_options', 'widget_list', $all_widgets);

    }
}