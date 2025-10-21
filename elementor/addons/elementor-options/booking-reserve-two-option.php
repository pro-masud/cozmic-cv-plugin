<?php 
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'layout_two_banner_content',
        [
            'label' => esc_html__('Content', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => 'layout_two'
            ]
        ]
    );
    
    $this->add_control(
        'layout_two_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Check-out time: before 11:00 am; check-in time: after 2:00 pm", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_select_wpcf7_form',
        [
            'label' => esc_html__('Select your contact form 7', 'careold-addon'),
            'label_block' => true,
            'type' => Controls_Manager::SELECT,
            'options' => cozmiq_post_query('wpcf7_contact_form'),
        ]
    );

    $this->end_controls_section();