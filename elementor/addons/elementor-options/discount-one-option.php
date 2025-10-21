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
        'layout_one_sub_title_icon',
    [
            'label' => __('Left Sub Title Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_subtitle',
        [
            'label' => esc_html__('Left Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Up to 30% Off', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_title',
        [
            'label' => esc_html__('Left Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Romantic Seaside Escape", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_description',
        [
            'label' => esc_html__('Left Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("Includes a private beach dinner, couples’ spa treatment, and a sunset sail for two.", 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_one_button1_text',
        [
            'label' => __( 'Button One Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'FIND OUR MORE', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_button1_url',
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
        'layout_one_right_sub_title_icon',
        [
            'label' => __('Right Sub Title Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_right_subtitle',
        [
            'label' => esc_html__('Right Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Enjoy 20% off', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_right_title',
        [
            'label' => esc_html__('Right Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Dine & Drink", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_right_description',
        [
            'label' => esc_html__('Right Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("Includes a private beach dinner, couples’ spa treatment", 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_one_right_button1_text',
        [
            'label' => __( 'Right Button Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'FIND OUR MORE', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_right_button1_url',
        [
            'label' => esc_html__( 'Right Button Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $this->add_control(
        'layout_one_bg_section', [
            'label' => esc_html__('Section Background', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    
    $this->end_controls_section();