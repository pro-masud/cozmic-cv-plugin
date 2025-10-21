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
        'name',
        [
            'label' => __('Member Name', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Jessica Brown', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $this->add_control(
        'designation',
        [
            'label' => __('Designation', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Designation', 'cozmiq-cv'),
            'default' => __('Guest Relations Officer', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

     $this->add_control(
        'description',
        [
            'label' => __('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'row' => '3',
            'placeholder' => __('Add Description', 'cozmiq-cv'),
            'default' => __('At the heart of our real estate success is a team of passionate, experienced professionals dedicated to helping you find the perfect home. From property advisors to marketing experts, every member brings their own strengths to deliver a seamless experience.', 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'phone_number',
        [
            'label' => __('Phone Number', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Phone', 'cozmiq-cv'),
            'default' => __('555-234-6543', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

     $this->add_control(
        'mail',
        [
            'label' => __('Email', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Email', 'cozmiq-cv'),
            'default' => __('example@gmail.com', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $this->add_control(
        'social_media',
        [
            'label' => __('Social Media', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add Social Links', 'cozmiq-cv'),
            'default' => __('<a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>', 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'social_text',
        [
            'label' => __('Social Text', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add Text', 'cozmiq-cv'),
            'default' => __('Follow On:', 'cozmiq-cv'),
            'label_block'   => true,
        ]
    );

    $this->add_control(
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

    $this->add_control(
        'layout_one_team_image',
        [
            'label' => __('Team Member Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();