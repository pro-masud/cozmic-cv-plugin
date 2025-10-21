<?php
/**
 * Elementor Widget
 * @package Cozmiq
 * @since 1.0.0
 */

namespace Elementor;
class Cozmiq_Blog_One_Widget extends Widget_Base {

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
        return 'cozmiq-theme-blog-one-widget';
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
        return esc_html__('Blog', 'cozmiq-cv');
    }

    public function get_keywords()
    {
        return ['Section', 'Blog', 'Cozmiq'];
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
        
        include_once plugin_dir_path(__FILE__) . 'elementor-options/blog-one-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/blog-two-option.php';
        include_once plugin_dir_path(__FILE__) . 'elementor-options/blog-three-option.php';

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

            cozmiq_elementor_general_style_options($this, 'Post Title', '{{WRAPPER}} .gt-news-box-items .gt-content h3,{{WRAPPER}} .gt-news-box-item-2 .gt-content h3 a,{{WRAPPER}} .news-card-items-3 .news-content h3 a', ['layout_one', 'layout_two', 'layout_three']);
            cozmiq_elementor_general_style_options($this, 'Post Meta', '{{WRAPPER}} .gt-news-box-items .gt-content .gt-list li,{{WRAPPER}} .gt-news-box-item-2 .gt-content .gt-list li,{{WRAPPER}} .news-card-items-3 .news-image .post-box h4,{{WRAPPER}} .news-card-items-3 .news-content .news-meta li a ,{{WRAPPER}} .news-card-items-3 .news-content .news-meta li ,{{WRAPPER}} .news-card-items-3 .news-image .post-box h4 span', ['layout_one', 'layout_two', 'layout_three']);

            cozmiq_elementor_button_style_options($this, 'Button One', '{{WRAPPER}} .gt-news-box-items .gt-content .gt-theme-btn,{{WRAPPER}} .gt-theme-btn,{{WRAPPER}}  .news-card-items-3 .news-content .link-btn', '{{WRAPPER}} .gt-news-box-items .gt-content .gt-theme-btn::before,{{WRAPPER}} .gt-theme-btn:hover,{{WRAPPER}}  .news-card-items-3 .news-content .link-btn:hover', ['layout_one', 'layout_two', 'layout_three']);

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

       include_once plugin_dir_path(__FILE__) . 'elementor-view/blog-one.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/blog-two.php';
       include_once plugin_dir_path(__FILE__) . 'elementor-view/blog-three.php';
    }
}

Plugin::instance()->widgets_manager->register(new Cozmiq_Blog_One_Widget());