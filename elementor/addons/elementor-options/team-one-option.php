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

    $layout_one_team_list = new \Elementor\Repeater();

    $layout_one_team_list->add_control(
        'name',
        [
            'label' => __('Member Name', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Jessica Brown', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_one_team_list->add_control(
        'designation',
        [
            'label' => __('Designation', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Designation', 'cozmiq-cv'),
            'default' => __('Guest Relations Officer', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_one_team_list->add_control(
        'social_media',
        [
            'label' => __('Social Media', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add Social Links', 'cozmiq-cv'),
            'default' => __('<a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>', 'cozmiq-cv'),
        ]
    );

    $layout_one_team_list->add_control(
        'social_text',
        [
            'label' => __('Social Text', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Text', 'cozmiq-cv'),
            'default' => __('Follow On:', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_one_team_list->add_control(
        'layout_one_button_url',
        [
            'label' => esc_html__( 'Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $layout_one_team_list->add_control(
        'layout_one_team_image',
        [
            'label' => __('Team Member Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_one_team_list',
        [
            'label' => __('Team Member List', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_team_list->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ name }}}',
        ]
    );

    $this->end_controls_section();