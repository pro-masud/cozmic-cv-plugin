<?php

namespace Wowaddons\Admin\WidgetsMap;

use \Wowaddons\Helpers\Utils as Utils;

class Advanced{

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
           
            'countdown' => [
                'demo' => '',
                'title' => __('Countdown', 'wowaddons'),
                'icon' => 'eicon-button',
                'filter' => 'advanced',
            ],
            // 'dual-button' => [
            //     'demo' => '',
            //     'title' => __('Dual Button', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'advanced',
            // ],
            // 'call-to-action' => [
            //     'demo' => '',
            //     'title' => __('Call to action', 'wowaddons'),
            //     'icon' => 'eicon-text',
            //     'filter' => 'advanced',
            // ],
            // 'image-compare' => [
            //     'demo' => '',
            //     'title' => __('Image Compare', 'wowaddons'),
            //     'icon' => 'eicon-icon-box',
            //     'filter' => 'advanced',
            // ],
            // 'image-gallery' => [
            //     'demo' => '',
            //     'title' => __('Image Gallery', 'wowaddons'),
            //     'icon' => 'eicon-icon-box',
            //     'filter' => 'advanced',
            // ],
            // 'flip-box' => [
            //     'demo' => '',
            //     'title' => __('Flip Box', 'wowaddons'),
            //     'icon' => 'eicon-icon-box',
            //     'filter' => 'advanced',
            // ],
            // 'price-table' => [
            //     'demo' => '',
            //     'title' => __('Price Table', 'wowaddons'),
            //     'icon' => 'eicon-price-table',
            //     'filter' => 'advanced',
            // ],
            // 'circle-progressbar' => [
            //     'demo' => '',
            //     'title' => __('Circle Progressbar', 'wowaddons'),
            //     'icon' => 'eicon-counter-circle',
            //     'filter' => 'advanced',
            // ],
            // 'blog-carousel' => [
            //     'demo' => '',
            //     'title' => __('Blog Carousel', 'wowaddons'),
            //     'icon' => 'eicon-posts-carousel',
            //     'filter' => 'advanced',
            // ],
            // 'blog-posts' => [
            //     'demo' => '',
            //     'title' => __('Blog Posts', 'wowaddons'),
            //     'icon' => 'eicon-posts-grid',
            //     'filter' => 'advanced',
            // ],
            // 'testimonial' => [
            //     'demo' => '',
            //     'title' => __('Testimonial', 'wowaddons'),
            //     'icon' => 'eicon-testimonial',
            //     'filter' => 'advanced',
            // ],
            // 'testimonial-carousel' => [
            //     'demo' => '',
            //     'title' => __('Testimonial Carousel', 'wowaddons'),
            //     'icon' => 'eicon-testimonial',
            //     'filter' => 'advanced',
            // ],
            // 'team' => [
            //     'demo' => '',
            //     'title' => __('Team', 'wowaddons'),
            //     'icon' => 'eicon-lock-user',
            //     'filter' => 'advanced',
            // ],
            // 'team-carousel' => [
            //     'demo' => '',
            //     'title' => __('Team Carousel', 'wowaddons'),
            //     'icon' => 'eicon-lock-user',
            //     'filter' => 'advanced',
            // ],
            // 'logo' => [
            //     'demo' => '',
            //     'title' => __('Logo', 'wowaddons'),
            //     'icon' => 'eicon-logo',
            //     'filter' => 'advanced',
            // ],
            // 'nav-menu' => [
            //     'demo' => '',
            //     'title' => __('Nav Menu', 'wowaddons'),
            //     'icon' => 'eicon-nav-menu',
            //     'filter' => 'advanced',
            // ],
            // 'portfolio-filter' => [
            //     'demo' => '',
            //     'title' => __('Portfolio Filter', 'wowaddons'),
            //     'icon' => 'eicon-posts-justified',
            //     'filter' => 'advanced',
            // ],
            // 'portfolio-carousel' => [
            //     'demo' => '',
            //     'title' => __('Portfolio Carousel', 'wowaddons'),
            //     'icon' => 'eicon-posts-carousel',
            //     'filter' => 'advanced',
            // ],
            // 'tabs' => [
            //     'demo' => '',
            //     'title' => __('Tabs', 'wowaddons'),
            //     'icon' => 'eicon-tabs',
            //     'filter' => 'advanced',
            // ],
            // 'social-share' => [
            //     'demo' => '',
            //     'title' => __('Social Share', 'wowaddons'),
            //     'icon' => 'eicon-social-icons',
            //     'filter' => 'advanced',
            // ],
            // 'carousel' => [
            //     'demo' => '',
            //     'title' => __('Carousel', 'wowaddons'),
            //     'icon' => 'eicon-carousel',
            //     'filter' => 'advanced',
            // ],
            // 'wpcf7' => [
            //     'demo' => '',
            //     'title' => __('Contact Form 7', 'wowaddons'),
            //     'icon' => 'eicon-form-horizontal',
            //     'filter' => 'advanced',
            // ],
            // 'easy-forms' => [
            //     'demo' => '',
            //     'title' => __('Easy Forms', 'wowaddons'),
            //     'icon' => 'eicon-form-horizontal',
            //     'filter' => 'advanced',
            // ],
            // 'instafeed' => [
            //     'demo' => '',
            //     'title' => __('Instagram Feed', 'wowaddons'),
            //     'icon' => 'eicon-instagram-nested-gallery',
            //     'filter' => 'advanced',
            // ],
            // 'slider' => [
            //     'demo' => '',
            //     'title' => __('Slider', 'wowaddons'),
            //     'icon' => 'eicon-media-carousel',
            //     'filter' => 'advanced',
            // ],
            // 'login' => [
            //     'demo' => '',
            //     'title' => __('Login', 'wowaddons'),
            //     'icon' => 'eicon-lock-user',
            //     'filter' => 'advanced',
            // ],
            // 'blockquote' => [
            //     'demo' => '',
            //     'title' => __('Blockquote', 'wowaddons'),
            //     'icon' => 'eicon-blockquote',
            //     'filter' => 'advanced',
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
