<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Facilities_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-facilities-one-widget';
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
        return esc_html__('Facilities', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Facilities', 'one', 'Cozmiq'];
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
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/facilities-one-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/facilities-two-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/facilities-three-option.php';

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
            cozmiq_elementor_general_style_options($this, 'Facilitie Title', '{{WRAPPER}} .service-box-items h4,{{WRAPPER}} .gt-why-choose-us-images .gt-choose-us-image .gt-content h3', ['layout_one', 'layout_two']);
            cozmiq_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .service-box-items h4,{{WRAPPER}} .gt-why-choose-us-images .gt-choose-us-image .gt-content p,{{WRAPPER}} .gt-hotel-facilities-wrapper-2 .gt-hotel-right-content .gt-hotel-text', ['layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Progress Bar Title', '{{WRAPPER}} .gt-hotel-facilities-wrapper-2 .gt-hotel-right-content .gt-skill-feature-items .gt-skill-feature .gt-box-title', ['layout_three']);
            cozmiq_elementor_general_style_options($this, 'Bar Percentage', '{{WRAPPER}} .gt-hotel-facilities-wrapper-2 .gt-hotel-right-content .gt-skill-feature-items .gt-skill-feature .gt-progress-value', ['layout_three']);
            cozmiq_elementor_general_style_options($this, 'Experience Years', '{{WRAPPER}} .gt-hotel-facilities-wrapper-2 .gt-hotel-left-images .gt-counter h2', ['layout_three']);
            cozmiq_elementor_general_style_options($this, 'Experience Text', '{{WRAPPER}} .gt-hotel-facilities-wrapper-2 .gt-hotel-left-images .gt-counter p', ['layout_three']);

            cozmiq_elementor_button_style_options($this, 'Button One', '{{WRAPPER}} .gt-theme-btn', '{{WRAPPER}} .gt-theme-btn::before', ['layout_three']);

            $this->add_control(
			'layout_one',
            [
                    'label' => esc_html__( 'Facilitie Color', 'cozmiq-cv' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-box-items .icon svg path' => 'fill: {{VALUE}}',
                    ],
                    'condition' => [
                        'layout_type' => 'layout_one'
                    ]
                ]
            );

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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/facilities-one.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/facilities-two.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/facilities-three.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Facilities_One_Widget());