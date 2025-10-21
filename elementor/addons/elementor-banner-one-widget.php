<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Banner_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-banner-one-widget';
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
        return esc_html__('Banner', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Banner', 'Title', 'Cozmiq'];
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
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/banner-one-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/banner-two-option.php'; 
        include_once plugin_dir_path(__FILE__) . 'elementor-options/banner-three-option.php'; 

        //Style tab style
        $this->start_controls_section(
            'style_settings_section',
            [
                'label' => esc_html__('Style Settings', 'cozmiq-cv'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            cozmiq_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .gt-hero-1 .gt-hero-content span,{{WRAPPER}} .gt-hero-2 .gt-hero-content span,{{WRAPPER}} .hero-3 .hero-content .star-items span', ['layout_one', 'layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .gt-hero-1 .gt-hero-content h1,{{WRAPPER}} .gt-hero-2 .gt-hero-content h1,{{WRAPPER}} .text-white,{{WRAPPER}} .hero-3 .hero-content h1', ['layout_one', 'layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .gt-hero-1 .gt-hero-content p,{{WRAPPER}} .gt-hero-2 .gt-hero-content p,{{WRAPPER}} .text-white,{{WRAPPER}} .hero-3 .hero-content p', ['layout_one', 'layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Contect Info', '{{WRAPPER}} .gt-hero-2 .hero-contact li a', [ 'layout_two']);
            cozmiq_elementor_general_style_options($this, 'Phone Text', '{{WRAPPER}} .hero-3 .hero-content .gt-hero-button .gt-call-icon .gt-content span', [ 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Phone Number', '{{WRAPPER}} .hero-3 .hero-content .gt-hero-button .gt-call-icon .gt-content a', [ 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Social Icon', '{{WRAPPER}} .gt-hero-2 .social-icon a svg patha', [ 'layout_two'], 'fill');
            cozmiq_elementor_button_style_options($this, 'Button One', '{{WRAPPER}} .gt-theme-btn', '{{WRAPPER}} .gt-theme-btn:hover', ['layout_one', 'layout_two', 'layout_three']);

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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/banner-one.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/banner-two.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/banner-three.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Banner_One_Widget());