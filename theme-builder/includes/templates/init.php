<?php 

function hugebinary_should_replace_404() {
    $arg = [
        'post_type' => 'hugebinary-builder',
        'post_status' => 'publish',
        'sort_order' => 'DESC',
        'sort_column' => 'ID,post_title',
        'numberposts' => -1,
    ];
    $pages = get_posts( $arg );
    
    foreach ($pages as $page) {
        $get_tempalte = get_post_meta($page->ID, 'hugebinary_header_templates', true);
        $active_not_found = get_post_meta($page->ID, 'is_hugebinary_404_active', true);

        if (is_array($get_tempalte) && isset($get_tempalte['type']) && $get_tempalte['type'] == 'f0f' && $active_not_found == 'yes') {
            return $page->ID;
        }
    }
    return false;
}

add_action('wp_ajax_template_404_update', 'template_404_update');

function template_404_update() {
    if (empty($_POST['post_id'])) {
        wp_die(__('Post Id not valid', 'domain'));
    }
    update_post_meta($_POST['post_id'], 'is_hugebinary_404_active', $_POST['status']);
    if ($_POST['status'] == 'yes') {
        $arg = [
            'post_type' => 'hugebinary-builder',
            'post_status' => 'publish',
            'sort_order' => 'DESC',
            'sort_column' => 'ID,post_title',
            'numberposts' => -1,
            'exclude' => $_POST['post_id'],
        ];
        $pages = get_posts($arg);

        foreach ($pages as $page) {
            $get_type = get_post_meta($page->ID, 'hugebinary_header_templates', true);
            if (is_array($get_type) && isset($get_type['type']) && $get_type['type'] == 'f0f') {
                update_post_meta($page->ID, 'is_hugebinary_404_active', 'no');
            }
        }
    }
    printf(__('%s Successfull', 'domain'), $_POST['message']);
    wp_die();
}

function wpdocs_selectively_enqueue_admin_script($hook) {
    wp_enqueue_script('hugebinary-hfb-scrpt', COZMIQ_CV_ROOT_URL . 'theme-builder/assets/js/admin.js', array('jquery'));
    wp_localize_script('hugebinary-hfb-scrpt', 'hugebinary_hfb_obj',
        array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script');

function get_themebuilder_Id($id, $type = 'header') {
    $arg = [
        'post_type' => 'hugebinary-builder',
        'post_status' => 'publish',
        'sort_order' => 'DESC',
        'sort_column' => 'ID,post_title',
        'numberposts' => -1,
    ];
    $pages = get_posts($arg);

    $dispaly_list = [];

    foreach ($pages as $page) {
        $get_tempalte = get_post_meta($page->ID, 'hugebinary_header_templates', true);

        if (is_array($get_tempalte) && isset($get_tempalte['type']) && $get_tempalte['type'] == $type) {
            if (isset($get_tempalte['display'])) {
                $dispaly_list[$page->ID] = $get_tempalte['display'];
            }
        }
    }

    return __themename_themebuilder_id($id, $dispaly_list);
}

function get_builder_id($arr, $key) {
    foreach ($arr as $k => $val) {
        if (!empty($val) && in_array($key, $val)) {
            return $k;
        }
    }
    return null;
}

if (!function_exists('__themename_themebuilder_id')) {
    function __themename_themebuilder_id($id, $arr = []) {
        if (empty($arr)) {
            return;
        }
        global $post;
        $post_id = (!empty($post) && is_object($post) && property_exists($post, 'ID')) ? $post->ID : 0;
        $post_type = get_post_type($post_id);

        if (is_singular($post_type) && get_builder_id($arr, $post_type)) {
            return get_builder_id($arr, $post_type);
        }
        if (is_front_page() && get_builder_id($arr, 'front_page')) {
            return get_builder_id($arr, 'front_page');
        }
        if (is_home() && get_builder_id($arr, 'home_page')) {
            return get_builder_id($arr, 'home_page');
        }
        if (is_404() && get_builder_id($arr, 'four_0_4')) {
            return get_builder_id($arr, 'four_0_4');
        }
        if (is_category() && get_builder_id($arr, 'category')) {
            return get_builder_id($arr, 'category');
        }
        if (is_archive() && get_builder_id($arr, 'archives')) {
            return get_builder_id($arr, 'archives');
        }
        if (is_search() && get_builder_id($arr, 'search')) {
            return get_builder_id($arr, 'search');
        }
        if (get_builder_id($arr, $id)) {
            return get_builder_id($arr, $id);
        }
        if (is_single() && get_builder_id($arr, 'all_posts')) {
            return get_builder_id($arr, 'all_posts');
        }
        if (is_page() && get_builder_id($arr, 'all_pages')) {
            return get_builder_id($arr, 'all_pages');
        }
        if (get_builder_id($arr, 'entire_website')) {
            return get_builder_id($arr, 'entire_website');
        }
        return '';
    }
}

add_action('get_header', 'hugebinary_core_replace_header');
function hugebinary_core_replace_header() {
    global $post;
    $post_id = (!empty($post) && is_object($post) && isset($post->ID)) ? $post->ID : 0;

    $header_id = get_themebuilder_Id($post_id, 'header');
    if ($header_id == '') {
        return false;
    }
    require PLUGIN_DIR . 'includes/templates/header.php';

    $templates = ['header.php'];
    remove_all_actions('wp_head');
    ob_start();
    locate_template($templates, true);
    ob_get_clean();
}

add_action('get_footer', 'hugebinary_core_replace_footer');
function hugebinary_core_replace_footer() {
    global $post;
    $post_id = (!empty($post) && is_object($post) && isset($post->ID)) ? $post->ID : 0;

    $footer = get_themebuilder_Id($post_id, 'footer');
    if ($footer == '') {
        return false;
    }
    require PLUGIN_DIR . 'includes/templates/footer.php';

    $templates = ['footer.php'];
    remove_all_actions('wp_footer');
    ob_start();
    locate_template($templates, true);
    ob_get_clean();
}

if (!function_exists('hugebinary_header_builder')) {
    function hugebinary_header_builder($header_banner) {
        if ($header_banner != '' && class_exists('\Elementor\Plugin')) {
            echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($header_banner);
        }
    }
    add_action('hugebinary_core_header', 'hugebinary_header_builder');
}

if (!function_exists('hugebinary_banner_builder')) {
    function hugebinary_banner_builder($banner_builder) {
        if ($banner_builder != '' && class_exists('\Elementor\Plugin')) {
            echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($banner_builder);
        }
    }
    add_action('hugebinary_core_banner', 'hugebinary_banner_builder');
}

if (!function_exists('hugebinary_footer_builder')) {
    function hugebinary_footer_builder($footer_banner) {
        if ($footer_banner != '' && class_exists('\Elementor\Plugin')) {
            echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($footer_banner);
        }
    }
    add_action('hugebinary_core_footer', 'hugebinary_footer_builder');
}

if (hugebinary_should_replace_404()) {
    add_filter("404_template", 'load_custom_404_page');
    function load_custom_404_page($hugebinary_four_zero_page) {
        return PLUGIN_DIR . 'includes/templates/404.php';
    }

    add_action('four_0_4_content', 'for_0_4_content_display');
    function for_0_4_content_display() {
        if (hugebinary_should_replace_404() != '' && class_exists('\Elementor\Plugin')) {
            echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(hugebinary_should_replace_404());
        }
    }
}