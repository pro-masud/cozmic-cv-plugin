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

    $layout_two_team_list = new \Elementor\Repeater();

    $layout_two_team_list->add_control(
        'name',
        [
            'label' => __('Member Name', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Jessica Brown', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_two_team_list->add_control(
        'designation',
        [
            'label' => __('Designation', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Designation', 'cozmiq-cv'),
            'default' => __('Guest Relations Officer', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_two_team_list->add_control(
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

    $layout_two_team_list->add_control(
        'social_text',
        [
            'label' => __('Social Text', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Text', 'cozmiq-cv'),
            'default' => __('Follow On:', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $layout_two_team_list->add_control(
        'layout_two_button_url',
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

    $layout_two_team_list->add_control(
        'layout_two_team_image',
        [
            'label' => __('Team Member Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_two_team_list',
        [
            'label' => __('Team Member List', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_two_team_list->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ name }}}',
        ]
    );

    $this->end_controls_section();