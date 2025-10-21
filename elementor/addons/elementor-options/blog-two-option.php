<?php
use Elementor\Controls_Manager;
    $this->start_controls_section(
        'layout_two_header_head',
        [
            'label' => __('Blog Header', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => [ 'layout_two' ]
            ]
        ]
    );

     $this->add_control(
        'layout_two_before_icon',
        [
            'label' => __('Before Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );
    
    $this->add_control(
        'layout_two_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('NEWS & BLOG', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

     $this->add_control(
        'layout_two_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Our Latest News Feed", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_btn_label',
        [
            'label' => esc_html__('Button Label', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("VIEW DETAILS", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_button_url',
        [
            'label' => esc_html__( 'Button Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $this->add_control(
        'layout_two_shape_img', [
            'label' => esc_html__('Shape Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
        'layout_two_post_option',
        [
            'label' => __('Post Options', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => [ 'layout_two' ]
            ]
        ]
    );

    $this->add_control(
        'layout_two_post_count',
        [
            'label' => __('Number Of Posts', 'cozmiq-cv'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['count'],
            'range' => [
                'count' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'count',
                'size' => 2,
            ],
        ]
    );

    $this->add_control(
        'layout_two_query_order',
        [
            'label' => __('Select Order', 'cozmiq-cv'),
            'type' => Controls_Manager::SELECT2,
            'default' => 'DESC',
            'options' => [
                'DESC' => __('DESC', 'cozmiq-cv'),
                'ASC' => __('ASC', 'cozmiq-cv'),
            ]
        ]
    );

    $this->add_control(
        'layout_two_select_category',
        [
            'label' => __('Post Category', 'cozmiq-cv'),
            'type' => Controls_Manager::SELECT2,
            'options' => cozmiq_get_taxonoy('category'),
        ]
    );

    $this->add_control(
        'layout_two_title_length',
        [
            'label'         => esc_html__('Title Length', 'cozmiq-cv'),
            'type'             => Controls_Manager::TEXT,
            'default'         => '12',
            'placeholder'     => esc_html__('Type Title Length', 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_two_button_label',
        [
            'label' => __('Button Label', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('VIEW MORE', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_date_shape', [
            'label' => esc_html__('Date Shape', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

$this->end_controls_section();