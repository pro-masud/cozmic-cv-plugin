<?php
/**
 * Theme Core Init
 * @package cozmiq
 * @since 1.0.0
 */

if (!defined("ABSPATH")) {
	exit(); //exit if access directly
}

if (!class_exists('Cozmiq_CV_Init')) {

	class Cozmiq_CV_Init
	{
	   /**
        * $instance
        * @since 1.0.0
        */
		protected static $instance;

		public function __construct()
		{
			//Load plugin assets
			add_action('wp_enqueue_scripts', array($this, 'plugin_assets'));
			//Load plugin admin assets
			add_action('admin_enqueue_scripts', array($this, 'admin_assets'));
			//load plugin text domain
			add_action('init', array($this, 'load_textdomain'));
			//add custom icon to codester framework
			add_filter('csf_field_icon_add_icons', array($this, 'csf_custom_icon'));
			//load plugin dependency files()
            add_action('plugin_loaded', array($this, 'load_plugin_dependency_files'));
			//load codestar
            add_action('after_setup_theme', array($this, 'load_codestar'));
		}

	   /**
        * getInstance()
        * @since 1.0.0
        */
		public static function getInstance()
		{
			if (null == self::$instance) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Load Plugin Text domain
		 * @since 1.0.0
		 */
		public function load_textdomain()
		{
			load_plugin_textdomain('cozmiqk-core', false, COZMIQ_CV_ROOT_PATH . '/languages');
		}

		/**
		 * Load codestar
		 * @since 1.0.0
		 */
		public function load_codestar(){
			if (!class_exists('CSF') ) {
				require_once plugin_dir_path(__FILE__) . '../lib/codestar-framework/codestar-framework.php';
			}
		}

		/**
        * init codestar
        * @since 1.0.0
        */
		public function init_codestar(){
			if (class_exists('CSF') ) {
				CSF::init();
			}
		}

		/**
		 * Load plugin dependency files()
		 * @since 1.0.0
		 */
		public function load_plugin_dependency_files()
		{
			$includes_files = array(
				array(
					'file-name' => 'theme-menu-page',
					'folder-name' => COZMIQ_CV_ADMIN
				),
				array(
					'file-name' => 'theme-custom-post-type',
					'folder-name' => COZMIQ_CV_ADMIN
				),
				array(
					'file-name' => 'theme-post-column-customize',
					'folder-name' => COZMIQ_CV_ADMIN
				),
				array(
					'file-name' => 'theme-cozmiq-cv-excerpt',
					'folder-name' => COZMIQ_CV_INC
				),
				array(
					'file-name' => 'csf-taxonomy',
					'folder-name' => COZMIQ_CV_INC
				),
				array(
					'file-name' => 'theme-core-shortcodes',
					'folder-name' => COZMIQ_CV_INC
				),
				array(
					'file-name' => 'elementor-widget-init',
					'folder-name' => COZMIQ_CV_ELEMENTOR
				),
                array(
                    'file-name' => 'theme-social-share-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-about-me-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-about-us-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-post-search-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-post-tags-menu',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
				array(
					'file-name' => 'theme-recent-post-widget',
					'folder-name' => COZMIQ_CV_WP_WIDGETS
				),
				array(
					'file-name' => 'theme-recent-post-title-widget',
					'folder-name' => COZMIQ_CV_WP_WIDGETS
				),
				array(
					'file-name' => 'theme-contact-info-widget',
					'folder-name' => COZMIQ_CV_WP_WIDGETS
				),
                array(
                    'file-name' => 'theme-service-category-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-request-form-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-post-category-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-discover-company-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-file-download-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
                array(
                    'file-name' => 'theme-author-widget',
                    'folder-name' => COZMIQ_CV_WP_WIDGETS
                ),
				array(
					'file-name' => 'theme-demo-data-import',
					'folder-name' => COZMIQ_CV_DEMO_IMPORT
				),
			);

            if (defined('ELEMENTOR_VERSION')) {
                $includes_files[] = array(
                    'file-name' => 'theme-elementor-icon-manager',
                    'folder-name' => COZMIQ_CV_INC
                );
            }
			if (is_array($includes_files) && !empty($includes_files)) {
				foreach ($includes_files as $file) {
					if (file_exists($file['folder-name'] . '/' . $file['file-name'] . '.php')) {
						require_once $file['folder-name'] . '/' . $file['file-name'] . '.php';
					}
				}
			}
		}

		/**
		 * Admin assets
		 * @since 1.0.0
		 */
		public function plugin_assets()
		{
			self::load_plugin_css_files();
			self::load_plugin_js_files();
		}

		/**
		 * Load plugin css files()
		 * @since 1.0.0
		 */
		public function load_plugin_css_files()
		{
			$plugin_version = COZMIQ_CV_VERSION;
			$all_css_files = array(
                array(
                    'handle' => 'all-min',
                    'src' => COZMIQ_CV_CSS . '/all.min.css',
                    'deps' => array(),
                    'ver' => '6.0.0',
                    'media' => 'all',
                ),
				array(
                    'handle' => 'bootstrap-bundle',
                    'src' => COZMIQ_CV_CSS . '/bootstrap.bundle.min.css',
                    'deps' => array(),
                    'ver' => '6.0.0',
                    'media' => 'all',
                ),
				array(
					'handle' => 'cozmiq-cv-main-style',
					'src' => COZMIQ_CV_CSS . '/main-style.css',
					'deps' => array(),
					'ver' => $plugin_version,
					'media' => 'all'
				)
			);
			
			if (!cozmiq_cv()->is_cozmiq_active()) {
				$all_css_files[] = array(
					'handle' => 'cozmiq-main-style',
					'src' => COZMIQ_CV_CSS . '/theme-style.css',
					'deps' => array(),
					'ver' => $plugin_version,
					'media' => 'all'
				);
				$all_css_files[] = array(
					'handle' => 'cozmiq-responsive',
					'src' => COZMIQ_CV_CSS . '/theme-responsive.css',
					'deps' => array(),
					'ver' => $plugin_version,
					'media' => 'all'
				);
			}
			$all_css_files = apply_filters('cozmiq_cv_css', $all_css_files);

			if (is_array($all_css_files) && !empty($all_css_files)) {
				foreach ($all_css_files as $css) {
					call_user_func_array('wp_enqueue_style', $css);
				}
			}
		}

		/**
		 * Load plugin js
		 * @since 1.0.0
		 */
		public function load_plugin_js_files()
		{
			// all js files
			wp_enqueue_script( 'bootstrap', COZMIQ_CV_JS . '/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true );
            wp_enqueue_script( 'wow', COZMIQ_CV_JS . '/wow.min.js', array('jquery'), '4.0.1', true );
            wp_enqueue_script( 'cozmiq-cv-main-script', COZMIQ_CV_JS . '/main.js', array('jquery'), time(), true );
		}

		/**
		 * Admin assets
		 * @since 1.0.0
		 */
		public function admin_assets()
		{
			self::load_admin_css_files();
			self::load_admin_js_files();
		}

		/**
		 * Load plugin admin css files()
		 * @since 1.0.0
		 */
		public function load_admin_css_files()
		{
			$plugin_version = COZMIQ_CV_VERSION;
			$all_css_files = array(
				array(
					'handle' => 'cozmiq-cv-admin-style',
					'src' => COZMIQ_CV_ADMIN_ASSETS . '/css/admin.css',
					'deps' => array(),
					'ver' => $plugin_version,
					'media' => 'all'
				),
				array(
					'handle' => 'flaticon',
					'src' => COZMIQ_CV_CSS . '/flaticon.css',
					'deps' => array(),
					'ver' => $plugin_version,
					'media' => 'all'
				),
			);

			$all_css_files = apply_filters('cozmiq_admin_css', $all_css_files);
			if (is_array($all_css_files) && !empty($all_css_files)) {
				foreach ($all_css_files as $css) {
					call_user_func_array('wp_enqueue_style', $css);
				}
			}
		}

		/**
		 * Load plugin admin js
		 * @since 1.0.0
		 */
		public function load_admin_js_files()
		{
			wp_enqueue_script( 'cozmiq-cv-widget', COZMIQ_CV_ADMIN_ASSETS . '/js/widget.js', array('jquery'), '1.0.6', true );
		}

		/**
		 * Add Custom Icon To Codester Framework
		 * @since 1.0.0
		*/
		public function csf_custom_icon($icons)
		{
			//adding new icon
			$icons[]  = array(
				'title' => esc_html__('Flaticon', 'cozmiq-cv'),
				'icons' => array(
					'flaticon-arrows',
					'flaticon-location',
					'flaticon-bus',
					'flaticon-free-parking',
					'flaticon-wifi-router',
					'flaticon-hotel-service',
					'flaticon-fast-food',
					'flaticon-swimming',
					'flaticon-key-card',
					'flaticon-route',
					'flaticon-right-arrow',
					'flaticon-arrow-right',
					'flaticon-bed',
					'flaticon-user',
					'flaticon-next',
					'flaticon-phone',
					'flaticon-contact',
					'flaticon-fitness-center',
					'flaticon-suite',
					'flaticon-luggage',
					'flaticon-disinfect',
					'flaticon-24-hour-service',
					'flaticon-all-day',
					'flaticon-bed-1',
					'flaticon-house',
					'flaticon-traveler-with-a-suitcase',
					'flaticon-target',
					'flaticon-leadership',
				)
			);

			$icons = array_reverse($icons);

			return $icons;
		}
	} //end class
	if (class_exists('Cozmiq_CV_Init')) {
		Cozmiq_CV_Init::getInstance();
	}
}
