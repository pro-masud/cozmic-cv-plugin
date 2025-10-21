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
            'default' => esc_html__('Our Seaside Retreat Is Stunning', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_after_icon',
    [
            'label' => __('After Icon', 'cozmiq-addon'),
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
            'default' => __("Explore the Magnificence of Our Beach Haven", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_description',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("Discover a sanctuary where sun-kissed shores meet timeless elegance. Nestled along pristine coastline, our Beach Haven offers a serene escape infused with luxurious comfort and breathtaking natural beauty.", 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_two_button1_text',
        [
            'label' => __( 'Button One Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'DISCOVER ROOM', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_button1_url',
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
        'layout_two_button2_text',
        [
            'label' => __( 'Button Two Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'Book Now', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_two_button2_url',
        [
            'label' => esc_html__( 'Button Two Link', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'options' => [ 'url', 'is_external', 'nofollow' ],
            'default' => [
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
            ],
            'label_block' => true,
        ]
    );

    // Social Links Repeater
    $layout_two_socials = new \Elementor\Repeater();

    $layout_two_socials->add_control(
        'social_icon',
        [
            'label' => __( 'Social Icon', 'cozmiq-addon' ),
            'type'  => Controls_Manager::ICONS,
        ]
    );

    $layout_two_socials->add_control(
        'social_link',
        [
            'label'   => __( 'Social Link', 'cozmiq-addon' ),
            'type'    => Controls_Manager::URL,
            'default' => [
                'url' => '#',
            ],
        ]
    );

    $this->add_control(
        'layout_two_socials',
        [
            'label'       => __( 'Social Icons', 'cozmiq-addon' ),
            'type'        => Controls_Manager::REPEATER,
            'fields'      => $layout_two_socials->get_controls(),
            'title_field' => '{{{ social_icon.value }}}',
        ]
    );

    $this->add_control(
        'layout_two_social_text',
        [
            'label' => __( 'Social Text', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'Fallow Us:', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    // Contact Info Repeater
    $contact_info_repeater = new \Elementor\Repeater();

    $contact_info_repeater->add_control(
        'contact_icon',
        [
            'label' => __( 'Contact Icon', 'cozmiq-addon' ),
            'type'  => Controls_Manager::ICONS,
        ]
    );

    $contact_info_repeater->add_control(
        'contact_text',
        [
            'label'   => __( 'Contact Text', 'cozmiq-addon' ),
            'type'    => Controls_Manager::TEXT,
            'label_block'   => true
        ]
    );

    $this->add_control(
        'contact_info_repeater',
        [
            'label'       => __( 'Contact Info', 'cozmiq-addon' ),
            'type'        => Controls_Manager::REPEATER,
            'fields'      => $contact_info_repeater->get_controls(),
            'default'     => [],
            'title_field' => '{{{ contact_text }}}',
        ]
    );

    $this->add_control(
        'layout_two_shape_one_img', [
            'label' => esc_html__('Shape One', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [ ],
        ]
    );

    $this->add_control(
        'layout_two_shape_two_img', [
            'label' => esc_html__('Shape Two', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [ ],
        ]
    );
    
    $this->add_control(
        'layout_two_background_img', [
            'label' => esc_html__('Section Background Images', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();