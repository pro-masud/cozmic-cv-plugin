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
            'label' => esc_html__('Sub Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('TESTIMONIAL', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_after_icon',
        [
            'label' => __('After Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_two_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("What Our Guests Sayz", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_two_testimonial = new \Elementor\Repeater();

    $layout_two_testimonial->add_control(
        'testimonial_style',
        [
            'label' => esc_html__( 'Box Style', 'cozmiq-cv' ),
            'type' => Controls_Manager::SELECT,
            'default' => 'custom-default',
            'options' => [
                'custom-default' => esc_html__( 'Default', 'cozmiq-cv' ),
                'style-2' => esc_html__( 'Style 1', 'cozmiq-cv' ),
                'style-3'  => esc_html__( 'Style 2', 'cozmiq-cv' ),
                'style-4' => esc_html__( 'Style 3', 'cozmiq-cv' ),
                'style-5' => esc_html__( 'Style 4', 'cozmiq-cv' ),
            ],
            'label_block' => true
        ]
    );

    $layout_two_testimonial->add_control(
        'name',
        [
            'label' => __('Name', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('Kevin martin', 'cozmiq-cv'),
            'label_block' => true
        ]
    );

    $layout_two_testimonial->add_control(
        'designation',
        [
            'label' => __('Designation', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('Customer', 'cozmiq-cv'),
            'label_block' => true
        ]
    );

    $layout_two_testimonial->add_control(
        'description',
        [
            'label' => __('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __('Default Testimonial Content', 'cozmiq-cv'),
        ]
    );

    $layout_two_testimonial->add_control(
        'rating',
        [
            'label' => __('Average Rating', 'cozmiq-cv'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['count'],
            'range' => [
                'count' => [
                    'min' => 1,
                    'max' => 5,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'count',
                'size' => 5,
            ],
        ]
    );

    $layout_two_testimonial->add_control(
        'image',
        [
            'label' => __('Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $layout_two_testimonial->add_control(
        'shape',
        [
            'label' => __('Bottom Shape', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_two_testimonial',
        [
            'label' => __('Testimonial Items', 'cozmiq-cv'),
            'prevent_empty' => false,
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_two_testimonial->get_controls(),
            'title_field' => '{{{ name }}}',
        ]
    );
    
    $this->add_control(
        'layout_two_map_image',
        [
            'label' => __('Map Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

     $this->add_control(
        'layout_two_section_bg',
        [
            'label' => __('Section Background', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->end_controls_section();