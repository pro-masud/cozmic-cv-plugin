<?php

namespace Wowaddons\Admin\WidgetsMap;

use \Wowaddons\Helpers\Utils as Utils;

class Basic{

    function __construct(){
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widget'], 10, 1);
    }

    public function register_widget($widgets_manager){
        $default_widgets = self::default_widgets();
        $active_widgets = Init::active_widgets();

        foreach ($active_widgets as $widget) {
            if (in_array($widget, $default_widgets)) {
                $class_name = 'Wowaddons\Wowaddons_' . Utils::mk_class($widget);
                include WOWADDONS_WIDGETS_DIR_PATH . '/' . $widget . '.php';
                if (class_exists($class_name)) {
                    $widgets_manager->register_widget_type(new $class_name());
                }
            }
        }
    }
 
    public static function widgets_map(){
        return [
            'accordion' => [
                'demo' => '',
                'title' => __('Accordion', 'wowaddons'),
                'icon' => 'eicon-accordion',
                'filter' => 'basic',
            ],
            // 'button' => [
            //     'demo' => '',
            //     'title' => __('Button', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'basic',
            // ],
            // 'contact-info' => [
            //     'demo' => '',
            //     'title' => __('Contact Info', 'wowaddons'),
            //     'icon' => 'eicon-text',
            //     'filter' => 'basic',
            // ],
            // 'faq' => [
            //     'demo' => '',
            //     'title' => __('Faq', 'wowaddons'),
            //     'icon' => 'eicon-accordion',
            //     'filter' => 'basic',
            // ],
            // 'heading' => [
            //     'demo' => '',
            //     'title' => __('Heading', 'wowaddons'),
            //     'icon' => 'eicon-t-letter',
            //     'filter' => 'basic',
            // ],
            // 'funfact' => [
            //     'demo' => '',
            //     'title' => __('Funfact', 'wowaddons'),
            //     'icon' => 'eicon-nerd-chuckle',
            //     'filter' => 'basic',
            // ],
            // 'icon-box' => [
            //     'demo' => '',
            //     'title' => __('Icon Box', 'wowaddons'),
            //     'icon' => 'eicon-icon-box',
            //     'filter' => 'basic',
            // ],
            // 'image-box' => [
            //     'demo' => '',
            //     'title' => __('Image Box', 'wowaddons'),
            //     'icon' => 'eicon-icon-box',
            //     'filter' => 'basic',
            // ],
            // 'progressbar' => [
            //     'demo' => '',
            //     'title' => __('Progressbar', 'wowaddons'),
            //     'icon' => 'eicon-skill-bar',
            //     'filter' => 'basic',
            // ],
            // 'social' => [
            //     'demo' => '',
            //     'title' => __('Social', 'wowaddons'),
            //     'icon' => 'eicon-social-icons',
            //     'filter' => 'basic',
            // ],
            // 'video' => [
            //     'demo' => '',
            //     'title' => __('Video', 'wowaddons'),
            //     'icon' => 'eicon-youtube',
            //     'filter' => 'basic',
            // ],
            // 'form' => [
            //     'demo' => '',
            //     'title' => __('Form', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'basic',
            // ],
        ];   
    }

    public static function default_widgets(){
        $map = self::widgets_map();
        $dynamic_widgets = [];
        foreach ($map as $key => $value) {
            $dynamic_widgets[] = $key;
        }
        return $dynamic_widgets;
    }
}
