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
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('NEWS & BLOG', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_after_icon',
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
        'layout_two_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Our Latest News Feed", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_two_instagram_lists = new \Elementor\Repeater();

    $layout_two_instagram_lists->add_control(
        'title',
        [
            'label' => __('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Default title', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );
    
    $layout_two_instagram_lists->add_control(
        'instagram_image',
        [
            'label' => __('Instagram Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $layout_two_instagram_lists->add_control(
        'icon',
        [
            'label' => __('Award Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => 'fa-brands fa-instagram',
                'library' => 'brand',
            ],
        ]
    );

    $layout_two_instagram_lists->add_control(
        'url',
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
        'layout_two_instagram_lists',
        [
            'label' => __('Marquee List', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_two_instagram_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->end_controls_section();