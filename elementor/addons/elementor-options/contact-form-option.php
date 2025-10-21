<?php 
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'layout_one_banner_content',
        [
            'label' => esc_html__('Content', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => 'layout_one'
            ]
        ]
    );

    $this->add_control(
        'layout_one_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Experience & Skill", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __(" Our experienced team combines deep market knowledge with strong negotiation, legal, and customer service skills. From property tours to closing deals, we offer personalized support, ensuring smooth, transparent transactions.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_progress_bar_one_lists = new \Elementor\Repeater();

    $layout_one_progress_bar_one_lists->add_control(
        'title',
        [
            'label' => __('Progress Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Romantic Escapes', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_progress_bar_one_lists->add_control(
        'percentage',
        [
            'label' => __('Progress Percentage', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Percentage', 'cozmiq-cv'),
            'default' => __('75', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_progress_bar_one_lists->add_control(
        'percentage_symble',
        [
            'label' => __('Percentage Symble', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Symble', 'cozmiq-cv'),
            'default' => __('%', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_progress_bar_one_lists',
        [
            'label' => __('Progress Bar', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_progress_bar_one_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_one_contact_title',
        [
            'label' => esc_html__('Contact Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Message With Me", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_select_wpcf7_form',
        [
            'label' => esc_html__('Select your contact form 7', 'careold-addon'),
            'label_block' => true,
            'type' => Controls_Manager::SELECT,
            'options' => cozmiq_post_query('wpcf7_contact_form'),
        ]
    );

    $this->end_controls_section();