<?php

namespace Wowaddons\Admin\WidgetsMap;

use \Wowaddons\Helpers\Utils as Utils;

class Init{
    function __construct()
    {
        new Advanced();
        new Basic();
        new Site();
        new Woo();
        new Form();
    }
    public static function active_widgets($default = []){
        return Utils::get_option('wowaddons_options', 'widget_list', $default);
    }
    public static function widget_filters(){
        return [
            // 'basic' => 'Basic',
            // 'advanced' => 'Advanced',
            // 'site' => 'Site',
            // 'form' => 'Form',
            // 'woo' => 'WooCommerce',
        ];
    }
}