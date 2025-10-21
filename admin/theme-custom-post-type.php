<?php
/**
 * Theme Custom Post Type(CPTs)
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}

if (!class_exists('Cozmiq_Custom_Post_Type')) {
    // class Cozmiq_Custom_Post_Type
    // {

    //     //$instance variable
    //     private static $instance;

    //     public function __construct()
    //     {
    //         //register post type
    //         add_action('init', array($this, 'register_custom_post_type'));
    //     }

    //     /**
    //      * get Instance
    //      * @since  2.0.0
    //      */
    //     public static function getInstance()
    //     {
    //         if (null == self::$instance) {
    //             self::$instance = new self();
    //         }

    //         return self::$instance;
    //     }

    //     /**
    //      * Register Custom Post Type
    //      * @since  2.0.0
    //      */
    //     public function register_custom_post_type()
    //     {
    //         if (!defined('ELEMENTOR_VERSION')) {
    //             return;
    //         }
    //         $all_post_type = array(
    //             [
    //                 'post_type' => 'service',
    //                 'args' => array(
    //                     'label' => esc_html__('Service', 'cozmiq-cv'),
    //                     'description' => esc_html__('Service', 'cozmiq-cv'),
    //                     'labels' => array(
    //                         'name' => esc_html_x('Service', 'Post Type General Name', 'cozmiq-cv'),
    //                         'singular_name' => esc_html_x('Service', 'Post Type Singular Name', 'cozmiq-cv'),
    //                         'menu_name' => esc_html__('Service', 'cozmiq-cv'),
    //                         'all_items' => esc_html__('Service', 'cozmiq-cv'),
    //                         'view_item' => esc_html__('View Service', 'cozmiq-cv'),
    //                         'add_new_item' => esc_html__('Add New Service', 'cozmiq-cv'),
    //                         'add_new' => esc_html__('Add New Service', 'cozmiq-cv'),
    //                         'edit_item' => esc_html__('Edit Service', 'cozmiq-cv'),
    //                         'update_item' => esc_html__('Update Service', 'cozmiq-cv'),
    //                         'search_items' => esc_html__('Search Service', 'cozmiq-cv'),
    //                         'not_found' => esc_html__('Not Found', 'cozmiq-cv'),
    //                         'not_found_in_trash' => esc_html__('Not found in Trash', 'cozmiq-cv'),
    //                         'featured_image' => esc_html__('Service Image', 'cozmiq-cv'),
    //                         'remove_featured_image' => esc_html__('Remove Service Image', 'cozmiq-cv'),
    //                         'set_featured_image' => esc_html__('Set Service Image', 'cozmiq-cv'),
    //                     ),
    //                     'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
    //                     'hierarchical' => true,
    //                     'public' => true,
    //                     "publicly_queryable" => true,
    //                     'show_ui' => true,
    //                     'show_in_menu' => true,
    //                     "rewrite" => array('slug' => 'all-service', 
    //                     'with_front' => true),
    //                     'can_export' => true,
    //                     'capability_type' => 'post',
    //                     "show_in_rest" => true,
    //                     'query_var' => true,
    //                 )
    //             ],
    //             [
    //                 'post_type' => 'game',
    //                 'args' => array(
    //                     'label' => esc_html__('Game', 'cozmiq-cv'),
    //                     'description' => esc_html__('Game', 'cozmiq-cv'),
    //                     'labels' => array(
    //                         'name' => esc_html_x('Game', 'Post Type General Name', 'cozmiq-cv'),
    //                         'singular_name' => esc_html_x('Game', 'Post Type Singular Name', 'cozmiq-cv'),
    //                         'menu_name' => esc_html__('Game', 'cozmiq-cv'),
    //                         'all_items' => esc_html__('Game', 'cozmiq-cv'),
    //                         'view_item' => esc_html__('View Game', 'cozmiq-cv'),
    //                         'add_new_item' => esc_html__('Add New Game', 'cozmiq-cv'),
    //                         'add_new' => esc_html__('Add New Game', 'cozmiq-cv'),
    //                         'edit_item' => esc_html__('Edit Game', 'cozmiq-cv'),
    //                         'update_item' => esc_html__('Update Game', 'cozmiq-cv'),
    //                         'search_items' => esc_html__('Search Game', 'cozmiq-cv'),
    //                         'not_found' => esc_html__('Not Found', 'cozmiq-cv'),
    //                         'not_found_in_trash' => esc_html__('Not found in Trash', 'cozmiq-cv'),
    //                         'featured_image' => esc_html__('Game Image', 'cozmiq-cv'),
    //                         'remove_featured_image' => esc_html__('Remove Game Image', 'cozmiq-cv'),
    //                         'set_featured_image' => esc_html__('Set Game Image', 'cozmiq-cv'),
    //                     ),
    //                     'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
    //                     'hierarchical' => false,
    //                     'public' => true,
    //                     "publicly_queryable" => true,
    //                     'show_ui' => true,
    //                     'show_in_menu' => true,
    //                     "rewrite" => array('slug' => 'all-game', 'with_front' => true),
    //                     'can_export' => true,
    //                     'capability_type' => 'post',
    //                     "show_in_rest" => true,
    //                     'query_var' => true
    //                 )
    //             ],
    //             [
    //                 'post_type' => 'team',
    //                 'args' => array(
    //                     'label' => esc_html__('team', 'cozmiq-cv'),
    //                     'description' => esc_html__('team', 'cozmiq-cv'),
    //                     'labels' => array(
    //                         'name' => esc_html_x('Team', 'Post Type General Name', 'cozmiq-cv'),
    //                         'singular_name' => esc_html_x('Team', 'Post Type Singular Name', 'cozmiq-cv'),
    //                         'menu_name' => esc_html__('Teams', 'cozmiq-cv'),
    //                         'all_items' => esc_html__('Teams', 'cozmiq-cv'),
    //                         'view_item' => esc_html__('View Teams', 'cozmiq-cv'),
    //                         'add_new_item' => esc_html__('Add New Team Member', 'cozmiq-cv'),
    //                         'add_new' => esc_html__('Add New Team Member', 'cozmiq-cv'),
    //                         'edit_item' => esc_html__('Edit Team', 'cozmiq-cv'),
    //                         'update_item' => esc_html__('Update Team', 'cozmiq-cv'),
    //                         'search_items' => esc_html__('Search Team', 'cozmiq-cv'),
    //                         'not_found' => esc_html__('Not Found', 'cozmiq-cv'),
    //                         'not_found_in_trash' => esc_html__('Not found in Trash', 'cozmiq-cv'),
    //                         'featured_image' => esc_html__('Team Image', 'cozmiq-cv'),
    //                         'remove_featured_image' => esc_html__('Remove Team Image', 'cozmiq-cv'),
    //                         'set_featured_image' => esc_html__('Set Team Image', 'cozmiq-cv'),
    //                     ),
    //                     'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
    //                     'hierarchical' => false,
    //                     'public' => true,
    //                     "publicly_queryable" => true,
    //                     'show_ui' => true,
    //                     'show_in_menu' => true,
    //                     "rewrite" => array('slug' => 'all-team', 'with_front' => true),
    //                     'can_export' => true,
    //                     'capability_type' => 'post',
    //                     "show_in_rest" => true,
    //                     'query_var' => true
    //                 )
    //             ]
    //         );

    //         if (!empty($all_post_type) && is_array($all_post_type)) {

    //             foreach ($all_post_type as $post_type) {
    //                 call_user_func_array('register_post_type', $post_type);
    //             }
    //         }


    //         /**
    //          * Custom Taxonomy Register
    //          * @since 1.0.0
    //          */

    //         $all_custom_taxonmy = array(
    //             array(
    //                 'taxonomy' => 'service-cat',
    //                 'object_type' => 'service',
    //                 'args' => array(
    //                     "labels" => array(
    //                         "name" => esc_html__("Service Category", 'cozmiq-cv'),
    //                         "singular_name" => esc_html__("Service Category", 'cozmiq-cv'),
    //                         "menu_name" => esc_html__("Service Category", 'cozmiq-cv'),
    //                         "all_items" => esc_html__("All Service Category", 'cozmiq-cv'),
    //                         "add_new_item" => esc_html__("Add New Service Category", 'cozmiq-cv')
    //                     ),
    //                     "public" => true,
    //                     "hierarchical" => true,
    //                     "show_ui" => true,
    //                     "show_in_menu" => true,
    //                     "show_in_nav_menus" => true,
    //                     "query_var" => true,
    //                     "rewrite" => array('slug' => 'service-cat', 'with_front' => true),
    //                     "show_admin_column" => true,
    //                     "show_in_rest" => true,
    //                     "show_in_quick_edit" => true,
    //                 )
    //             ),
    //             array(
    //                 'taxonomy' => 'game-cat',
    //                 'object_type' => 'game',
    //                 'args' => array(
    //                     "labels" => array(
    //                         "name" => esc_html__("Game Category", 'cozmiq-cv'),
    //                         "singular_name" => esc_html__("Game Category", 'cozmiq-cv'),
    //                         "menu_name" => esc_html__("Game Category", 'cozmiq-cv'),
    //                         "all_items" => esc_html__("All Game Category", 'cozmiq-cv'),
    //                         "add_new_item" => esc_html__("Add New Game Category", 'cozmiq-cv')
    //                     ),
    //                     "public" => true,
    //                     "hierarchical" => true,
    //                     "show_ui" => true,
    //                     "show_in_menu" => true,
    //                     "show_in_nav_menus" => true,
    //                     "query_var" => true,
    //                     "rewrite" => array('slug' => 'game-cat', 'with_front' => true),
    //                     "show_admin_column" => true,
    //                     "show_in_rest" => true,
    //                     "show_in_quick_edit" => true,
    //                 )
    //             ),
    //             array(
    //                 'taxonomy' => 'team-cat',
    //                 'object_type' => 'team',
    //                 'args' => array(
    //                     "labels" => array(
    //                         "name" => esc_html__("Team Category", 'cozmiq-cv'),
    //                         "singular_name" => esc_html__("Team Category", 'cozmiq-cv'),
    //                         "menu_name" => esc_html__("Team Category", 'cozmiq-cv'),
    //                         "all_items" => esc_html__("All Team Category", 'cozmiq-cv'),
    //                         "add_new_item" => esc_html__("Add New Team Category", 'cozmiq-cv')
    //                     ),
    //                     "public" => true,
    //                     "hierarchical" => true,
    //                     "show_ui" => true,
    //                     "show_in_menu" => true,
    //                     "show_in_nav_menus" => true,
    //                     "query_var" => true,
    //                     "rewrite" => array('slug' => 'team-cat', 'with_front' => true),
    //                     "show_admin_column" => true,
    //                     "show_in_rest" => true,
    //                     "show_in_quick_edit" => true,
    //                 )
    //             )
    //         );

    //         if (is_array($all_custom_taxonmy) && !empty($all_custom_taxonmy)) {
    //             foreach ($all_custom_taxonmy as $taxonomy) {
    //                 call_user_func_array('register_taxonomy', $taxonomy);
    //             }
    //         }


    //         /**
    //          * Custom Tags Register
    //          * @since 1.0.0
    //          */

    //         $all_custom_tags = array(
    //             array(
    //                 'taxonomy' => 'service-tag',
    //                 'object_type' => 'service',
    //                 'args' => array(
    //                     "labels" => array(
    //                         "name" => esc_html__("Service Tag", 'cozmiq-cv'),
    //                         "singular_name" => esc_html__("Service Tag", 'cozmiq-cv'),
    //                         "menu_name" => esc_html__("Service Tag", 'cozmiq-cv'),
    //                         "all_items" => esc_html__("All Service Tag", 'cozmiq-cv'),
    //                         "add_new_item" => esc_html__("Add New Service Tag", 'cozmiq-cv')
    //                     ),
    //                     "public" => true,
    //                     "show_ui" => true,
    //                     "show_in_menu" => true,
    //                     "show_in_nav_menus" => true,
    //                     "query_var" => true,
    //                     "rewrite" => array('slug' => 'service-tag'),
    //                     "show_admin_column" => true,
    //                     "show_in_rest" => true,
    //                     "show_in_quick_edit" => true,
    //                     'hierarchical' => false,
    //                     'update_count_callback' => '_update_post_term_count',
    //                 )
    //             ),
    //             array(
    //                 'taxonomy' => 'game-tag',
    //                 'object_type' => 'game',
    //                 'args' => array(
    //                     "labels" => array(
    //                         "name" => esc_html__("Game Tag", 'cozmiq-cv'),
    //                         "singular_name" => esc_html__("Game Tag", 'cozmiq-cv'),
    //                         "menu_name" => esc_html__("Game Tag", 'cozmiq-cv'),
    //                         "all_items" => esc_html__("All Game Tag", 'cozmiq-cv'),
    //                         "add_new_item" => esc_html__("Add New Game Tag", 'cozmiq-cv')
    //                     ),
    //                     "public" => true,
    //                     "show_ui" => true,
    //                     "show_in_menu" => true,
    //                     "show_in_nav_menus" => true,
    //                     "query_var" => true,
    //                     "rewrite" => array('slug' => 'game-tag'),
    //                     "show_admin_column" => true,
    //                     "show_in_rest" => true,
    //                     "show_in_quick_edit" => true,
    //                     'hierarchical' => false,
    //                     'update_count_callback' => '_update_post_term_count',
    //                 )
    //             ),
    //             array(
    //                 'taxonomy' => 'team-tag',
    //                 'object_type' => 'team',
    //                 'args' => array(
    //                     "labels" => array(
    //                         "name" => esc_html__("Team Tag", 'cozmiq-cv'),
    //                         "singular_name" => esc_html__("Team Tag", 'cozmiq-cv'),
    //                         "menu_name" => esc_html__("Team Tag", 'cozmiq-cv'),
    //                         "all_items" => esc_html__("All Team Tag", 'cozmiq-cv'),
    //                         "add_new_item" => esc_html__("Add New Team Tag", 'cozmiq-cv')
    //                     ),
    //                     "public" => true,
    //                     "show_ui" => true,
    //                     "show_in_menu" => true,
    //                     "show_in_nav_menus" => true,
    //                     "query_var" => true,
    //                     "rewrite" => array('slug' => 'team-tag'),
    //                     "show_admin_column" => true,
    //                     "show_in_rest" => true,
    //                     "show_in_quick_edit" => true,
    //                     'hierarchical' => false,
    //                     'update_count_callback' => '_update_post_term_count',
    //                 )
    //             ),
    //         );

    //         if (is_array($all_custom_tags) && !empty($all_custom_tags)) {
    //             foreach ($all_custom_tags as $tags) {
    //                 call_user_func_array('register_taxonomy', $tags);
    //             }
    //         }


    //         flush_rewrite_rules();
    //     }

    // }//end class

    // if (class_exists('Cozmiq_Custom_Post_Type')) {
    //     Cozmiq_Custom_Post_Type::getInstance();
    // }
}