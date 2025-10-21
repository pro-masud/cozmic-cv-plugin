<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_About_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-about-one-widget';
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
        return esc_html__('About Us', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'About', 'Us', 'Cozmiq'];
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
                    'layout_two' => __( 'Layout Two', 'cozmiq-cv' ),
                    'layout_three' => __( 'Layout Three', 'cozmiq-cv' ),
                ]
            ]
        );

        $this->end_controls_section();
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/about-one-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/about-two-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/about-three-option.php';

        //Style tab style
        $this->start_controls_section(
            'style_settings_section',
            [
                'label' => esc_html__('Style Settings', 'cozmiq-cv'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            cozmiq_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .gt-section-title h6', ['layout_one', 'layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .gt-section-title h2', ['layout_one', 'layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .gt-about-wrapper .gt-about-content .gt-about-text,{{WRAPPER}} .gt-about-wrapper-3 .gt-about-content .gt-about-text', ['layout_one', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'List Item', '{{WRAPPER}} .gt-about-wrapper .gt-about-content .gt-icon-list li span,{{WRAPPER}} .gt-about-wrapper .gt-about-content .gt-list li ', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Booking Text', '{{WRAPPER}} .gt-about-wrapper .gt-about-content .gt-about-button .gt-call-icon .gt-content span', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Booking Number', '{{WRAPPER}} .gt-about-wrapper .gt-about-content .gt-about-button .gt-call-icon .gt-content a', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Phone Icon', '{{WRAPPER}} .gt-about-wrapper .gt-about-content .gt-about-button .gt-call-icon .gt-call', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Award Text', '{{WRAPPER}} .gt-about-wrapper .gt-about-image-items .gt-award-box h4', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Award Icon', '{{WRAPPER}} .gt-about-wrapper .gt-about-image-items .gt-award-box .gt-icon svg path', ['layout_one'], 'fill');
            cozmiq_elementor_general_style_options($this, 'Feature Title', '{{WRAPPER}} .gt-about-wrapper-3 .gt-about-content .gt-icon-items li .content h4', ['layout_three'] );
            cozmiq_elementor_general_style_options($this, 'Feature Icon', '{{WRAPPER}} .gt-about-wrapper-3 .gt-about-content .gt-icon-items li .icon i', ['layout_three'] );
            cozmiq_elementor_general_style_options($this, 'Check List', '{{WRAPPER}} .gt-about-wrapper-3 .gt-about-content .gt-about-list li', ['layout_three'] );
            
            cozmiq_elementor_general_style_options($this, 'List Title', '{{WRAPPER}} .gt-about-wrapper-2 .gt-about-left-content .gt-about-box-items .about-content-icon .gt-icon-box .content h3', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'List Description', '{{WRAPPER}} .gt-about-wrapper-2 .gt-about-left-content .gt-about-box-items .about-content-icon .gt-icon-box .content p', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'List Icon', '{{WRAPPER}} .gt-about-wrapper-2 .gt-about-left-content .gt-about-box-items .about-content-icon .gt-icon-box .content i', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'Since Text', '{{WRAPPER}} .gt-about-wrapper-2 .gt-about-left-content .gt-about-box-items .gt-about-images .title-box', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'Counter Number', '{{WRAPPER}} .gt-about-wrapper-2 .gt-about-right-image .gt-about-image .gt-counter-box h2', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'Counter Text', '{{WRAPPER}} .gt-about-wrapper-2 .gt-about-right-image .gt-about-image .gt-counter-box h4', ['layout_two']);

            cozmiq_elementor_button_style_options($this, 'Button One', '{{WRAPPER}} .gt-theme-btn', '{{WRAPPER}} .gt-theme-btn::before', ['layout_one', 'layout_two', 'layout_three']);

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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/about-one.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/about-two.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/about-three.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_About_One_Widget());