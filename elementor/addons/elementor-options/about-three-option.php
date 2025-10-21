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
        'layout_three_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('About Us', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_sub_title_icon',
    [
            'label' => __('Sub Title Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_three_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Welcome to our resort and hotel, Cozmiq", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("At our hotel, luxury is more than just a word — it's a tradition. From exquisite design to personalized service, every detail is thoughtfully curated to create unforgettable experiences. Whether you're here for relaxation or celebration", 'cozmiq-cv'),
        ]
    );

    $layout_three_feature_one_lists = new \Elementor\Repeater();

    $layout_three_feature_one_lists->add_control(
        'title',
        [
            'label' => __('Feature title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Default title', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

     $layout_three_feature_one_lists->add_control(
        'icon',
    [
            'label' => __('Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => 'flaticon-24-hour-service',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_three_feature_one_lists',
        [
            'label' => __('Feature Items', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_three_feature_one_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_three_check_list',
        [
            'label' => esc_html__('Check List', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __('<li>
                                        <i class="flaticon-arrow-right"></i>
                                        Modern & Comfortable Rooms
                                    </li>
                                    <li>
                                        <i class="flaticon-arrow-right"></i>
                                        Business Lounge & Meeting Rooms
                                    </li>
                                    <li>
                                        <i class="flaticon-arrow-right"></i>
                                        Laundry & Dry Cleaning Services
                                    </li>', 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_three_button1_text',
        [
            'label' => __( 'Button Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'LEAR MORE', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_button1_url',
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
        'layout_three_video_url',
        [
            'label' => esc_html__( 'Video URL', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $this->add_control(
        'layout_three_feature_img', [
            'label' => esc_html__('Feature Images', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_three_feature_two_img', [
            'label' => esc_html__('Feature Images Two', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_three_shape_one', [
            'label' => esc_html__('Shape One', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    
    $this->add_control(
        'layout_three_shape_two', [
            'label' => esc_html__('Shape Two', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->end_controls_section();