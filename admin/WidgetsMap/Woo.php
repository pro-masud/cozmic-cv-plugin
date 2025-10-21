<?php

namespace Wowaddons\Admin\WidgetsMap;

use \Wowaddons\Helpers\Utils as Utils;

class Woo{

    function __construct(){
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widget'], 10, 1);
    }

    public function register_widget($widgets_manager){
        $default_widgets = self::default_widgets();
        $active_widgets = Init::active_widgets();

        foreach ($active_widgets as $widget) {
            if (in_array($widget, $default_widgets)) {
                $class_name = 'Wowaddons\Wowaddons_' . Utils::mk_class($widget);
                include WOWADDONS_WIDGETS_DIR_PATH . '/woocommerce/' . $widget . '.php';
                if (class_exists($class_name)) {
                    $widgets_manager->register_widget_type(new $class_name());
                }
            }
        }
    }
 
    public static function widgets_map(){
        return [
            'product-archive' => [
                'demo' => '',
                'title' => __('Products', 'wowaddons'),
                'icon' => 'eicon-button',
                'filter' => 'woo',
            ],
            // 'product-categories' => [
            //     'demo' => '',
            //     'title' => __('Products Categories', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'woo-breadcrumb' => [
            //     'demo' => '',
            //     'title' => __('Woo Breadcrumb', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'add-to-cart' => [
            //     'demo' => '',
            //     'title' => __('Add To Cart', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'woo-pages' => [
            //     'demo' => '',
            //     'title' => __('Woo Pages', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'menu-cart' => [
            //     'demo' => '',
            //     'title' => __('Menu Cart', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-title' => [
            //     'demo' => '',
            //     'title' => __('Product Title', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-thumbnail' => [
            //     'demo' => '',
            //     'title' => __('Product Thumbnail', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-short-description' => [
            //     'demo' => '',
            //     'title' => __('Product Short Description', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // // 'product-content' => [
            // //     'demo' => '',
            // //     'title' => __('Product Content', 'wowaddons'),
            // //     'icon' => 'eicon-button',
            //     // 'filter' => 'woo',
            // // ],
            // 'product-price' => [
            //     'demo' => '',
            //     'title' => __('Prouct Price', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-meta' => [
            //     'demo' => '',
            //     'title' => __('Prouct Meta', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-ratting' => [
            //     'demo' => '',
            //     'title' => __('Prouct Rating', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'group-products' => [
            //     'demo' => '',
            //     'title' => __('Group Products', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'tabs' => [
            //     'demo' => '',
            //     'title' => __('Prouct Tabs', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'total-sale' => [
            //     'demo' => '',
            //     'title' => __('Total Sale', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'up-sells' => [
            //     'demo' => '',
            //     'title' => __('Up Sells', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-attribute' => [
            //     'demo' => '',
            //     'title' => __('Prouct Attributes', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-images' => [
            //     'demo' => '',
            //     'title' => __('Prouct Images', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-related' => [
            //     'demo' => '',
            //     'title' => __('Prouct Related', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-sale-badge' => [
            //     'demo' => '',
            //     'title' => __('Sale Badge', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-stock' => [
            //     'demo' => '',
            //     'title' => __('Stock', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'product-variation' => [
            //     'demo' => '',
            //     'title' => __('Prouct Variation', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'your-order' => [
            //     'demo' => '',
            //     'title' => __('Your Order', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'customer-details' => [
            //     'demo' => '',
            //     'title' => __('Customer Details', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'order-details' => [
            //     'demo' => '',
            //     'title' => __('Order Details', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'order-receipt' => [
            //     'demo' => '',
            //     'title' => __('Order Receipt', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'cart-items' => [
            //     'demo' => '',
            //     'title' => __('Cart Items', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'cart-table' => [
            //     'demo' => '',
            //     'title' => __('Cart Table', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'cart-total' => [
            //     'demo' => '',
            //     'title' => __('Cart Total', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'coupon' => [
            //     'demo' => '',
            //     'title' => __('Coupon', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'cross-sells' => [
            //     'demo' => '',
            //     'title' => __('Cross Sells', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'dashboard' => [
            //     'demo' => '',
            //     'title' => __('Dashboard', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'form-additional' => [
            //     'demo' => '',
            //     'title' => __('Form Additional', 'wowaddons'),
            //     'icon' => 'eicon-button',
                // 'filter' => 'woo',
            // ],
            // 'form-billing' => [
            //     'demo' => '',
            //     'title' => __('Form Billing', 'wowaddons'),
            //     'icon' => 'eicon-button',
                // 'filter' => 'woo',
            // ],
            // 'form-shipping' => [
            //     'demo' => '',
            //     'title' => __('Form Shipping', 'wowaddons'),
            //     'icon' => 'eicon-button',
                // 'filter' => 'woo',
            // ],
            // 'woo-nav-menu' => [
            //     'demo' => '',
            //     'title' => __('Woo Nav Menu', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'payment-method' => [
            //     'demo' => '',
            //     'title' => __('Payment Method', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'review-order' => [
            //     'demo' => '',
            //     'title' => __('Review Order', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
            // 'review' => [
            //     'demo' => '',
            //     'title' => __('Review', 'wowaddons'),
            //     'icon' => 'eicon-button',
            //     'filter' => 'woo',
            // ],
        ];
    }
    public static function default_widgets(){
        $map = self::widgets_map();
        $default_woo_builder_widgets = [];
        foreach ($map as $key => $value) {
            $default_woo_builder_widgets[] = $key;
        }
        return $default_woo_builder_widgets;
    }
}
