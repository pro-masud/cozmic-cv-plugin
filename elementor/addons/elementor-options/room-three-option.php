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
            'default' => esc_html__('ROOMS', 'cozmiq-cv'),
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
            'default' => __("Reste’s Rooms & Suites", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_button_label',
        [
            'label' => esc_html__('Button Label', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("VIEW DETAILS", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_three_button_url',
        [
            'label' => __('Button Url', 'cozmiq-cv'),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $layout_three_feature_room_list = new \Elementor\Repeater();
    
    $layout_three_feature_room_list->add_control(
        'title',
        [
            'label' => __('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Executive Room', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_three_feature_room_list->add_control(
        'layout_three_feature_room_image',
        [
            'label' => __('Feature Room Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $layout_three_feature_room_list->add_control(
        'url',
        [
            'label' => __('Url', 'cozmiq-cv'),
            'type' => Controls_Manager::URL,
            'placeholder' => __('#', 'cozmiq-cv'),
            'show_external' => false,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
            'show_label' => true,
        ]
    );

    
    $this->add_control(
        'layout_three_feature_room_list',
        [
            'label' => __('Feature Room Lists', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_three_feature_room_list->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $layout_three_room_list = new \Elementor\Repeater();

    $layout_three_room_list->add_control(
        'title',
        [
            'label' => __('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Presidential Beachfront Villa', 'cozmiq-cv'),
        ]
    );

    $layout_three_room_list->add_control(
        'price',
        [
            'label' => __('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add Price', 'cozmiq-cv'),
            'default' => __('Rates From $120', 'cozmiq-cv'),
        ]
    );

    $layout_three_room_list->add_control(
        'service_list',
        [
            'label' => __('Service List', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'placeholder' => __('Add Description', 'cozmiq-cv'),
            'default' => __('<li>
                                        <img src="assets/img/home-3/room/bed.png" alt="img">
                                        02 Beds
                                    </li>
                                    <li>
                                        <img src="assets/img/home-3/room/room.png" alt="img">
                                        80 sqr
                                    </li>
                                    <li>
                                        <img src="assets/img/home-3/room/man.png" alt="img">
                                        02 Guests
                                    </li>', 'cozmiq-cv'),
        ]
    );

    $layout_three_room_list->add_control(
        'button_label',
        [
            'label' => __('Button Label', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add button', 'cozmiq-cv'),
            'default' => __('DISCOVER MORE', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_three_room_list->add_control(
        'url',
        [
            'label' => __('Url', 'cozmiq-cv'),
            'type' => Controls_Manager::URL,
            'placeholder' => __('#', 'cozmiq-cv'),
            'show_external' => false,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
            'show_label' => true,
        ]
    );

    $layout_three_room_list->add_control(
        'layout_three_room_image',
        [
            'label' => __('Room Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_three_room_list',
        [
            'label' => __('Room Lists', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_three_room_list->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_three_background_image',
        [
            'label' => __('Section Background Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();