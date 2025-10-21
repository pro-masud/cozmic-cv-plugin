<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Contact_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-contact-one-widget';
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
        return esc_html__('Contact', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Contact', 'one', 'Cozmiq'];
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
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/contact-form-option.php';

        //Style tab style
        $this->start_controls_section(
            'style_settings_section',
            [
                'label' => esc_html__('Style Settings', 'cozmiq-cv'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            cozmiq_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .gt-team-experience-content .gt-list-item h3', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .gt-team-experience-content .gt-list-item p', ['layout_one']);

            cozmiq_elementor_general_style_options($this, 'Progress Bar Title', '{{WRAPPER}} .gt-team-experience-wrapper .gt-team-experience-content .gt-skill-feature-items .gt-skill-feature .gt-box-title', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Bar Percentage', '{{WRAPPER}} .gt-team-experience-wrapper .gt-team-experience-content .gt-skill-feature-items .gt-skill-feature .gt-progress-value', ['layout_one']);
            cozmiq_elementor_general_style_options($this, 'Contact Title', '{{WRAPPER}} .gt-team-experience-wrapper .contact-form-items h3', ['layout_one']);

            cozmiq_elementor_form_style_options( $this, 'Input Text', '{{WRAPPER}} input[type="text"]', [ 'layout_one' ] );
            cozmiq_elementor_form_style_options( $this, 'Input Email', '{{WRAPPER}} input[type="email"]', [ 'layout_one' ] );
            cozmiq_elementor_form_style_options( $this, 'Textarea', '{{WRAPPER}}  textarea', [ 'layout_one' ] );
            cozmiq_elementor_form_style_options( $this, 'Input Url', '{{WRAPPER}} input[type="url"]', [ 'layout_one' ] );
            cozmiq_elementor_form_style_options( $this, 'Input Number', '{{WRAPPER}} input[type="number"]', [ 'layout_one' ] );
            cozmiq_elementor_form_style_options( $this, 'Input Tel', '{{WRAPPER}} input[type="tel"]', [ 'layout_one' ] );

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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/contact-form-one.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Contact_One_Widget());