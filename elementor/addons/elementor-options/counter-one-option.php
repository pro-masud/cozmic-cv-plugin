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

    $layout_one_counter_one_lists = new \Elementor\Repeater();

    $layout_one_counter_one_lists->add_control(
        'title',
        [
            'label' => __('Counter Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Default title', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_counter_one_lists->add_control(
        'counter_number',
        [
            'label' => __('Number', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'rows' => '2',
            'placeholder' => __('Add number', 'cozmiq-cv'),
            'default' => __('99', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_counter_one_lists->add_control(
        'symble',
        [
            'label' => __('Symble', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'rows' => '2',
            'placeholder' => __('Add symble', 'cozmiq-cv'),
            'default' => __('+', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_counter_one_lists->add_control(
        'border_right',
        [
            'label' => esc_html__( 'Border Right', 'cozmiq-cv' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'cozmiq-cv' ),
            'label_off' => esc_html__( 'Hide', 'cozmiq-cv' ),
            'return_value' => 'yes',
            'default' => 'no',
        ]
    );

    $this->add_control(
        'layout_one_counter_one_lists',
        [
            'label' => __('Counter List', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_counter_one_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->end_controls_section();