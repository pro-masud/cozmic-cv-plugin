<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Special_Offer_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-special-offer-one-widget';
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
        return esc_html__('Special Offer', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Special', 'Offer', 'Slider', 'Cozmiq'];
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
                ]
            ]
        );

        $this->end_controls_section();
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/special-offer-one-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/special-offer-two-option.php';

        //Style tab style
        $this->start_controls_section(
            'style_settings_section',
            [
                'label' => esc_html__('Style Settings', 'cozmiq-cv'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            cozmiq_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .gt-section-title h6,{{WRAPPER}} .gt-offer-content-left-3 h5', ['layout_one', 'layout_two']);
            cozmiq_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .gt-section-title h2,{{WRAPPER}} .gt-offer-content-left-3 h2', ['layout_one', 'layout_two']);
            
            cozmiq_elementor_general_style_options($this, 'Pricing', '{{WRAPPER}} .gt-offer-content-left-3 h4', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'Description ', '{{WRAPPER}} .gt-offer-content-left-3 p', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'Booking Text', '{{WRAPPER}} .gt-offer-section-3 .book-text', ['layout_two']);

            cozmiq_elementor_general_style_options($this, 'Offer Title', '{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content h3 a', 'layout_one');
            cozmiq_elementor_general_style_options($this, 'Category', '{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content span', 'layout_one');
            cozmiq_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content p', 'layout_one');
            cozmiq_elementor_general_style_options($this, 'List Text', '{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content .gt-list-area .gt-list li', 'layout_one');
            cozmiq_elementor_general_style_options($this, 'List Icon', '{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content .gt-list-area .gt-list li i', 'layout_one');
            cozmiq_elementor_general_style_options($this, 'Price', '{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content .gt-price-list h4,{{WRAPPER}} .gt-special-offer-wrapper .gt-special-offer-box-items .gt-content .gt-price-list h4 i', 'layout_one');
           

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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/special-offer-one.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/special-offer-two.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Special_Offer_One_Widget());