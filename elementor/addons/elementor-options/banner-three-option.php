<?php 
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'layout_three_banner_content',
        [
            'label' => esc_html__('Content', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => 'layout_three'
            ]
        ]
    );
    
    $this->add_control(
        'layout_three_rating',
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

    $this->add_control(
        'layout_three_rating_client',
        [
            'label' => __( 'Client Number', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( '1 0 0 0 + H A P P Y C L I E N T ', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Experience Elegance in the Center of the City", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_description',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("Discover a sanctuary where sun-kissed shores meet timeless elegance. Nestled along pristine coastline, our Beach Haven offers a serene escape infused with luxurious comfort and breathtaking natural beauty.", 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_three_button1_text',
        [
            'label' => __( 'Button One Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'DISCOVER ROOM', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_button1_url',
        [
            'label' => esc_html__( 'Button One Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $this->add_control(
        'layout_three_phone_text',
        [
            'label' => __( 'Phone Text', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'Booking Now', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_number',
        [
            'label' => __( 'Phone Number', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( '08005554433', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_feature_image', [
            'label' => esc_html__('Feature Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [ ],
        ]
    );
    
    $this->add_control(
        'layout_three_background_img', [
            'label' => esc_html__('Section Background Images', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();