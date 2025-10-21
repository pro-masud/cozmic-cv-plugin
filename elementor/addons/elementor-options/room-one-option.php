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
            'default' => esc_html__('ROOMS', 'cozmiq-cv'),
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
            'default' => __("Reste’s Rooms & Suites", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_room_list = new \Elementor\Repeater();

    $layout_one_room_list->add_control(
        'title',
        [
            'label' => __('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Luxury Signature Suites', 'cozmiq-cv'),
        ]
    );

    $layout_one_room_list->add_control(
        'per_night',
        [
            'label' => __('Per Night', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add Price', 'cozmiq-cv'),
            'default' => __('$269 / NIGHT', 'cozmiq-cv'),
        ]
    );

    $layout_one_room_list->add_control(
        'sqft_room',
        [
            'label' => __('SQ.FT/Rooms', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add SQ.FT', 'cozmiq-cv'),
            'default' => __('1500 SQ.FT/Rooms', 'cozmiq-cv'),
        ]
    );

    $layout_one_room_list->add_control(
        'guests',
        [
            'label' => __('Guests', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Guests', 'cozmiq-cv'),
            'default' => __('2', 'cozmiq-cv'),
        ]
    );

    $layout_one_room_list->add_control(
        'category',
        [
            'label' => __('Category', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add category', 'cozmiq-cv'),
            'default' => __('Luxury Room', 'cozmiq-cv'),
        ]
    );

    $layout_one_room_list->add_control(
        'button_label',
        [
            'label' => __('Button Label', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add button', 'cozmiq-cv'),
            'default' => __('DISCOVER MORE', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_room_list->add_control(
        'url',
        [
            'label' => __('Url', 'cozmiq-cv'),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $layout_one_room_list->add_control(
        'layout_one_room_image',
        [
            'label' => __('Room Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $layout_one_room_list->add_control(
        'active_margin',
        [
            'label' => esc_html__( 'Active Margin', 'cozmiq-cv' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'cozmiq-cv' ),
            'label_off' => esc_html__( 'Hide', 'cozmiq-cv' ),
            'return_value' => 'yes',
            'default' => 'no',
        ]
    );

    $this->add_control(
        'layout_one_room_list',
        [
            'label' => __('Room Lists', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_room_list->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->end_controls_section();