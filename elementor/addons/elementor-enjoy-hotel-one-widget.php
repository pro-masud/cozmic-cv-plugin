<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Enjoy_Hotel_One_Widget extends Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve Elementor widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name()
    {
        return 'cozmiq-theme-enjoy-hotel-one-widget';
    }

    /**
     * Get widget title.
     *
     * Retrieve Elementor widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title()
    {
        return esc_html__('Enjoy Hotel', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Enjoy', 'Hotel', 'Cozmiq'];
    }

    /**
     * Get widget icon.
     *
     * Retrieve Elementor widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon()
    {
        return 'eicon-banner';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Elementor widget belongs to.
     *
     * @return array Widget categories.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_categories()
    {
        return ['cozmiq_widgets'];
    }

    /**
     * Register Elementor widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {
        $this->start_controls_section(
            'layout_section',
            [ 
                'label' => __( 'Layout', 'cozmiq-cv' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout_type',
            [ 
                'label' => __( 'Select Layout', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'layout_one',
                'options' => [ 
                    'layout_one' => __( 'Layout One', 'cozmiq-cv' ),
                ]
            ]
        );

        $this->end_controls_section();
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/enjoy-hotel-one-option.php';

        //Style tab style
        $this->start_controls_section(
            'style_settings_section',
            [
                'label' => esc_html__('Style Settings', 'cozmiq-cv'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            cozmiq_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .gt-section-title h6', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .gt-section-title h2', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Tab Title', '{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-enjoy-hotel-content .nav .nav-item .nav-link,{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-enjoy-hotel-content .nav .nav-item .nav-link.active', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'List Title', '{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-enjoy-hotel-content .menu-list p', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'List', '{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-enjoy-hotel-content .menu-list ul li,{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-enjoy-hotel-content .menu-list ul li span', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Experience Years', '{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-hotel-images-items .gt-hotel-image .gt-counter h2', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Experience Text', '{{WRAPPER}} .gt-enjoy-hotel-wrapper-3 .gt-hotel-images-items .gt-hotel-image .gt-counter p',[ 'layout_one']);

            cozmiq_elementor_button_style_options($this, 'Button One', '{{WRAPPER}} .gt-theme-btn', '{{WRAPPER}} .gt-theme-btn::before', ['layout_one']);

        $this->end_controls_section();
    }

    /**
     * Render Elementor widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();

       include_once plugin_dir_path(__FILE__) . 'elementor-view/enjoy-hotel-one.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Enjoy_Hotel_One_Widget());