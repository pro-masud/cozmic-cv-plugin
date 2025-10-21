<?php

/**
 * Elementor Addons Init
 * @package cozmiq
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit(); // exit if access directly
}


if ( ! class_exists( 'Cozmiq_Elementor_Widget_Init' ) ) {

	class Cozmiq_Elementor_Widget_Init {
	   /**
		* $instance
		* @since 1.0.0
		*/
		private static $instance;

	   /**
		* construct()
		* @since 1.0.0
		*/
		public function __construct() {
			add_action( 'elementor/elements/categories_registered', array( $this, '_widget_categories' ), 10);
			//elementor widget registered
			add_action( 'elementor/widgets/widgets_registered', array( $this, '_widget_registered' ) );
			// elementor editor css
			add_action( 'elementor/editor/after_enqueue_scripts', array( $this, 'load_assets_for_elementor' ) );
			//add icon to elementor new icons fileds
			add_filter( 'elementor/icons_manager/native', array( $this, 'add_custom_icon_to_elementor_icons' ) );
		}

		/**
	     * getInstance()
	     * @since 1.0.0
	     */
		public static function getInstance() {
			if ( null == self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * _widget_categories()
		 * @since 1.0.0
		 */
		public function _widget_categories( $elements_manager ) {
			$slug  = 'cozmiq_widgets';
			$entry = [
				'title' => esc_html__( 'Cozmiq Widgets', 'cozmiq-cv' ),
				'icon'  => 'fas fa-plug',
			];
			$elements_manager->add_category( $slug, $entry );

			$cats = $elements_manager->get_categories();

			unset( $cats[ $slug ] );

			$new = [];
			$inserted = false;
			foreach ( $cats as $key => $data ) {
				if ( 'basic' === $key && ! $inserted ) {
					$new[ $slug ] = $entry;
					$inserted = true;
				}
				$new[ $key ] = $data;
			}
			if ( ! $inserted ) {
				$new = [ $slug => $entry ] + $new;
			}

			$set = function( $cats_arr ) { $this->categories = $cats_arr; };
			$set->call( $elements_manager, $new );
		}

		/**
		 * _widget_registered()
		 * @since 1.0.0
		 */
		public function _widget_registered() {
			if ( ! class_exists( 'Elementor\Widget_Base' ) ) {
				return;
			}
			$elementor_widgets = array(
				'header',
			);

			$elementor_widgets = apply_filters( 'cozmiq_elementor_widget', $elementor_widgets );
			ksort( $elementor_widgets );
			if ( is_array( $elementor_widgets ) && ! empty( $elementor_widgets ) ) {
				foreach ( $elementor_widgets as $widget ) {
					if ( file_exists( COZMIQ_CV_ELEMENTOR . '/addons/elementor-' . $widget . '-widget.php' ) ) {
						require_once COZMIQ_CV_ELEMENTOR . '/addons/elementor-' . $widget . '-widget.php';
					}
				}
			}
			
		}

		public function add_custom_icon_to_elementor_icons( $icons ) {
			$icons['flaticon'] = [
				'name'          => 'flaticon',
				'label'         => esc_html__( 'Flaticon', 'cozmiq-cv' ),
				'url'           => COZMIQ_CV_CSS . '/flaticon.css',
				// icon css file
				'enqueue'       => [ COZMIQ_CV_CSS . '/flaticon.css' ],
				// icon css file
				'prefix'        => 'flaticon-',
				//prefix ( like fas-fa  )
				'displayPrefix' => '',
				//prefix to display icon
				'labelIcon'     => 'flaticon-karate-1',
				//tab icon of elementor icons library
				'ver'           => '1.0.0',
				'fetchJson'     => COZMIQ_CV_JS . '/flaticon.json',
				//json file with icon list example {"icons: ['icon class']}
				'native'        => true,
			];

			return $icons;
		}

		/**
		 * load custom assets for elementor
		 * @since 1.0.0
		*/
		public function load_assets_for_elementor() {
			wp_enqueue_style( 'flaticon', COZMIQ_CV_CSS . '/flaticon.css' );
			wp_enqueue_style( 'cozmiq-cv-elementor-style', COZMIQ_CV_ADMIN_ASSETS . '/css/elementor-editor.css' );
		}
	}

	if ( class_exists( 'Cozmiq_Elementor_Widget_Init' ) ) {
		Cozmiq_Elementor_Widget_Init::getInstance();
	}
}//end if


