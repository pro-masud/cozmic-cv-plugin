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
        'layout_one_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('ABOUT US', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_sub_title_icon',
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
        'layout_one_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("More Than a Stay – A Legacy of Luxury\"t", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_description',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("At our hotel, luxury is more than just a word — it's a tradition. From exquisite design to personalized service, every detail is thoughtfully curated to create unforgettable experiences. Whether you're here for relaxation or celebration, we offer more than a stay — we offer a legacy of comfort, elegance, and world-class hospitality.", 'cozmiq-cv'),
        ]
    );

    $layout_one_feature_one_lists = new \Elementor\Repeater();

    $layout_one_feature_one_lists->add_control(
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

    $layout_one_feature_one_lists->add_control(
        'icon', [
            'label' => esc_html__('Icon', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_feature_one_lists',
        [
            'label' => __('Feature Items', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_feature_one_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_one_list_items',
        [
            'label' => __('List Icon', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '3',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('<li>
                                        <i class="flaticon-arrow-right"></i>
                                        Morning Meals for Everyone
                                    </li>
                                    <li>
                                        <i class="flaticon-arrow-right"></i>
                                        The Best Parking Space
                                    </li>', 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_one_booking_text',
        [
            'label' => __( 'Booking Text', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'Booking Now', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_booking_number',
        [
            'label' => __( 'Booking Number', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( '0 800 555 44 33', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_phone_icon',
    [
            'label' => __('Phone Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => 'flaticon-phone',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_button1_text',
        [
            'label' => __( 'Button One Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'ABOUT US', 'cozmiq-cv' ),
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
        'layout_one_awad_text',
        [
            'label' => __( 'Award Text', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'AWARD WINING HOTEL', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_awad_icon',
        [
            'label' => __('Award Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_feature_img', [
            'label' => esc_html__('Feature Images', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_one_feature_two_img', [
            'label' => esc_html__('Feature Images Two', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    
    $this->add_control(
        'layout_one_shape_img', [
            'label' => esc_html__('Shape Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();