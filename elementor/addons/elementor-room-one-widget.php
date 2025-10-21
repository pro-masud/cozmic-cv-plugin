<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Room_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-room-one-widget';
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
        return esc_html__('Room Slider', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Room', 'Slider', 'Cozmiq'];
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
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/room-one-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/room-two-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/room-three-option.php';

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
            cozmiq_elementor_general_style_options($this, 'Room Title', '{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-content h3', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Category', '{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-content .gt-post-cat', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Per Night Text', '{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-thumb .gt-post-box', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Meta Text', '{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-content .gt-list li', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Meta Icon', '{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-content .gt-list li i', ['layout_one']);

            cozmiq_elementor_general_style_options($this, 'Room Feature Title', '{{WRAPPER}} .gt-room-wrapper-3 .top-title a', ['layout_three']);
            
            cozmiq_elementor_general_style_options($this, 'Room Title ', '{{WRAPPER}} .gt-room-explore-wrapper .gt-room-exlore-box-items h3,{{WRAPPER}} .room-slider-image-3 .room-thumb .room-content .content h3', ['layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Meta Text ', '{{WRAPPER}} .room-slider-image-3 .room-thumb .room-content .content ul li', ['layout_three']);
            cozmiq_elementor_general_style_options($this, 'Price', '{{WRAPPER}} .gt-room-explore-wrapper .gt-room-exlore-box-items .gt-rate-title,{{WRAPPER}} .room-slider-image-3 .room-thumb .room-content span', ['layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .gt-room-explore-wrapper .gt-room-exlore-box-items p', ['layout_two']);
            cozmiq_elementor_general_style_options($this, 'Service List ', '{{WRAPPER}} .gt-room-explore-wrapper .gt-room-exlore-box-items ul li', ['layout_two']);
            
            cozmiq_elementor_button_style_options($this, 'Button One', '{{WRAPPER}} .gt-theme-btn,{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-content .gt-link-btn,{{WRAPPER}} .gt-room-explore-wrapper .gt-room-exlore-box-items .gt-theme-btn,{{WRAPPER}} .room-slider-image-3 .room-thumb .room-content .content .gt-theme-btn', '{{WRAPPER}} .gt-theme-btn:hover,{{WRAPPER}} .gt-room-wrapper .gt-room-box-items .gt-content .gt-link-btn:hover,{{WRAPPER}} .gt-room-explore-wrapper .gt-room-exlore-box-items .gt-theme-btn:hover,{{WRAPPER}} .room-slider-image-3 .room-thumb .room-content .content .gt-theme-btn:hover', ['layout_one', 'layout_two', 'layout_three']);
            
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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/room-one.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/room-two.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/room-three.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Room_One_Widget());