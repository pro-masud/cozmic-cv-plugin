<?php

namespace Wowaddons\Admin\WidgetsMap;

use \Wowaddons\Helpers\Utils as Utils;

class Site{

    function __construct(){
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widget'], 10, 1);
    }


    public function register_widget($widgets_manager){

        $default_widgets = self::default_widgets();
        $active_widgets = Init::active_widgets();

        foreach ($active_widgets as $widget) {
            if (in_array($widget, $default_widgets)) {
                $class_name = 'Wowaddons\Wowaddons_' . Utils::mk_class($widget);
                include WOWADDONS_WIDGETS_DIR_PATH . '/site/' . $widget . '.php';
                if (class_exists($class_name)) {
                    $widgets_manager->register_widget_type(new $class_name());
                }
            }
        }
    }

    public static function widgets_map(){
        return [
            'post-title' => [
                'demo' => '',
                'title' => __( 'Post Title', 'wowaddons' ),
                'icon' => 'eicon-button',
                'filter' => 'site',
            ],
        ];
    }
    public static function default_widgets(){
        $map = self::widgets_map();
        $default_site_builder_widgets = [];
        foreach ($map as $key => $value) {
            $default_site_builder_widgets[] = $key;
        }
        return $default_site_builder_widgets;
    }
}
