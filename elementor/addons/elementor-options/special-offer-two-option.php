<?php 
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'layout_two_banner_content',
        [
            'label' => __('Content', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => 'layout_two'
            ]
        ]
    );

    $this->add_control(
        'layout_two_logo_image',
        [
            'label'   => __( 'Logo Image', 'cozmiq-cv' ),
            'type'    => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_two_heading',
        [
            'label'   => __( 'Title', 'cozmiq-cv' ),
            'type'    => Controls_Manager::TEXTAREA,
            'default' => __( ' Summer Big <br> Offer', 'cozmiq-cv' ),
            'label_block'   => true
        ]
    );

    $this->add_control(
        'layout_two_subheading',
        [
            'label'   => __( 'Sub Title', 'cozmiq-cv' ),
            'type'    => Controls_Manager::TEXT,
            'default' => __( 'STARTS FROM', 'cozmiq-cv' ),
            'label_block'   => true
        ]
    );

    $this->add_control(
        'layout_two_price',
        [
            'label'   => __( 'Price', 'cozmiq-cv' ),
            'type'    => Controls_Manager::TEXT,
            'default' => __( '$599.00', 'cozmiq-cv' ),
            'label_block'   => true
        ]
    );

    $this->add_control(
        'layout_two_description',
        [
            'label'   => __( 'Description', 'cozmiq-cv' ),
            'type'    => Controls_Manager::TEXTAREA,
            'default' => __( 'Purus Rinean sedm. Ongue tellus, nunc nec magna laoreet. Et erosum viverra et vivamus. Mcipit felis nullaiaculis.', 'cozmiq-cv' ),
        ]
    );
    
    $this->add_control(
        'layout_two_booking_text',
        [
            'label'   => __( 'Booking Text', 'cozmiq-cv' ),
            'type'    => Controls_Manager::TEXT,
            'default' => __( 'BOOKING NOW', 'cozmiq-cv' ),
            'label_block'   => true
        ]
    );

    $this->add_control(
        'layout_two_video_link',
        [
            'label'       => __( 'Video Link', 'cozmiq-cv' ),
            'type'        => Controls_Manager::URL,
            'placeholder' => __( 'https://your-link.com', 'cozmiq-cv' ),
            'default'     => [
                'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
            ],
        ]
    );

    $this->add_control(
        'layout_two_left_shape_image',
        [
            'label'   => __( 'Left Shape Image', 'cozmiq-cv' ),
            'type'    => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_two_background_image',
        [
            'label'   => __( 'Background Image', 'cozmiq-cv' ),
            'type'    => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();