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
        'layout_three_before_icon',
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
        'layout_three_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Facilities', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Why Choose Us", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("The Framework blends modern luxury with timeless design, offering sophisticated spaces, elegant details, and a serene atmosphere crafted for unforgettable beachfront living and elevated guest experiences.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_three_progress_bar_one_lists = new \Elementor\Repeater();

    $layout_three_progress_bar_one_lists->add_control(
        'title',
        [
            'label' => __('Progress Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Romantic Escapes', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_three_progress_bar_one_lists->add_control(
        'percentage',
        [
            'label' => __('Progress Percentage', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Percentage', 'cozmiq-cv'),
            'default' => __('75', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_three_progress_bar_one_lists->add_control(
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
        'layout_three_progress_bar_one_lists',
        [
            'label' => __('Progress Bar', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_three_progress_bar_one_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_three_year_experience',
        [
            'label' => esc_html__('Experience Years', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("21", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_symble',
        [
            'label' => esc_html__('Symble', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("+", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_year_text',
        [
            'label' => esc_html__('Experience Text', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Years Of Experience", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_video_url',
        [
            'label' => esc_html__( 'Video Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $this->add_control(
        'layout_three_button1_text',
        [
            'label' => __( 'Button Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'ABOUT US', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'llayout_three_button1_url',
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
        'layout_three_feature_one_image',
        [
            'label' => __('Feature One Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $this->add_control(
        'layout_three_feature_two_image',
        [
            'label' => __('Feature Two Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $this->add_control(
        'layout_three_feature_three_image',
        [
            'label' => __('Feature Three Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [ ],
        ]
    );

    $this->end_controls_section();